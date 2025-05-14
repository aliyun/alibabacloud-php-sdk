<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class MigrateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $ossBucketEndpoint;

    /**
     * @var string
     */
    public $ossBucketName;
    protected $_name = [
        'ossBucketEndpoint' => 'oss_bucket_endpoint',
        'ossBucketName' => 'oss_bucket_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossBucketEndpoint) {
            $res['oss_bucket_endpoint'] = $this->ossBucketEndpoint;
        }

        if (null !== $this->ossBucketName) {
            $res['oss_bucket_name'] = $this->ossBucketName;
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
        if (isset($map['oss_bucket_endpoint'])) {
            $model->ossBucketEndpoint = $map['oss_bucket_endpoint'];
        }

        if (isset($map['oss_bucket_name'])) {
            $model->ossBucketName = $map['oss_bucket_name'];
        }

        return $model;
    }
}
