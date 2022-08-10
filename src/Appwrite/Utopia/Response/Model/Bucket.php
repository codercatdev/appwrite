<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Bucket extends Model
{
    public function __construct()
    {
        $this
            ->addRule('$id', [
                'type' => self::TYPE_STRING,
                'description' => 'Bucket ID.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            ->addRule('$createdAt', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Bucket creation date in Unix timestamp.',
                'default' => 0,
                'example' => 1592981250,
            ])
            ->addRule('$updatedAt', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Bucket update date in Unix timestamp.',
                'default' => 0,
                'example' => 1592981250,
            ])
            ->addRule('$read', [
                'type' => self::TYPE_STRING,
                'description' => 'File read permissions.',
                'default' => [],
                'example' => ['role:all'],
                'array' => true,
            ])
            ->addRule('$write', [
                'type' => self::TYPE_STRING,
                'description' => 'File write permissions.',
                'default' => [],
                'example' => ['user:608f9da25e7e1'],
                'array' => true,
            ])
            ->addRule('permission', [
                'type' => self::TYPE_STRING,
                'description' => 'Bucket permission model. Possible values are `bucket` or `file`',
                'default' => '',
                'example' => 'file',
            ])
            ->addRule('name', [
                'type' => self::TYPE_STRING,
                'description' => 'Bucket name.',
                'default' => '',
                'example' => 'Documents',
            ])
            ->addRule('enabled', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'If the bucket is enabled.',
                'default' => true,
                'example' => false,
            ])
            ->addRule('maximumFileSize', [
                'type' => self::TYPE_INTEGER,
                'description' => 'Maximum file size supported in bytes.',
                'default' => 0,
                'example' => 1000000,
            ])
            ->addRule('allowedFileExtensions', [
                'type' => self::TYPE_STRING,
                'description' => 'Allowed file extensions.',
                'default' => [],
                'example' => ['jpg', 'png'],
                'array' => true
            ])
            ->addRule('encryption', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'If the bucket is encrypted.',
                'default' => true,
                'example' => false,
            ])
            ->addRule('antivirus', [
                'type' => self::TYPE_BOOLEAN,
                'description' => 'If virus scanning is enabled.',
                'default' => true,
                'example' => false,
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Bucket';
    }

    /**
     * Get Collection
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_BUCKET;
    }
}
