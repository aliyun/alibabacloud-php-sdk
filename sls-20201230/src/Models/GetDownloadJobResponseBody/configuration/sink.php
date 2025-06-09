<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody\configuration;

use AlibabaCloud\Dara\Model;

class sink extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $compressionType;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bucket' => 'bucket',
        'compressionType' => 'compressionType',
        'contentType' => 'contentType',
        'prefix' => 'prefix',
        'roleArn' => 'roleArn',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->compressionType) {
            $res['compressionType'] = $this->compressionType;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['compressionType'])) {
            $model->compressionType = $map['compressionType'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
