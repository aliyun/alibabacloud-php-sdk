<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketLifecycleRequest extends Model
{
    /**
     * @var LifecycleConfiguration
     */
    public $lifecycleConfiguration;
    protected $_name = [
        'lifecycleConfiguration' => 'LifecycleConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleConfiguration) {
            $res['LifecycleConfiguration'] = null !== $this->lifecycleConfiguration ? $this->lifecycleConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketLifecycleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleConfiguration'])) {
            $model->lifecycleConfiguration = LifecycleConfiguration::fromMap($map['LifecycleConfiguration']);
        }

        return $model;
    }
}
