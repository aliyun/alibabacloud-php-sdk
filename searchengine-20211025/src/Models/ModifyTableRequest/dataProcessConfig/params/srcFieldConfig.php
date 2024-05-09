<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest\dataProcessConfig\params;

use AlibabaCloud\Tea\Model;

class srcFieldConfig extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example oss-cn-hangzhou-internal.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @example uid
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'ossBucket'   => 'ossBucket',
        'ossEndpoint' => 'ossEndpoint',
        'uid'         => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucket) {
            $res['ossBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['ossEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return srcFieldConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ossBucket'])) {
            $model->ossBucket = $map['ossBucket'];
        }
        if (isset($map['ossEndpoint'])) {
            $model->ossEndpoint = $map['ossEndpoint'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
