<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class AllocatePodConfigRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId'     => 'AppId',
        'envId'     => 'EnvId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocatePodConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
