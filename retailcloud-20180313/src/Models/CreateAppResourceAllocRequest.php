<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateAppResourceAllocRequest extends Model
{
    /**
     * @var int
     */
    public $appEnvId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'appEnvId'  => 'AppEnvId',
        'appId'     => 'AppId',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnvId) {
            $res['AppEnvId'] = $this->appEnvId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppResourceAllocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEnvId'])) {
            $model->appEnvId = $map['AppEnvId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
