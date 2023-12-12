<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetEngineDefaultAuthResponseBody\authInfos;
use AlibabaCloud\Tea\Model;

class GetEngineDefaultAuthResponseBody extends Model
{
    /**
     * @var authInfos[]
     */
    public $authInfos;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authInfos'  => 'AuthInfos',
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authInfos) {
            $res['AuthInfos'] = [];
            if (null !== $this->authInfos && \is_array($this->authInfos)) {
                $n = 0;
                foreach ($this->authInfos as $item) {
                    $res['AuthInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEngineDefaultAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthInfos'])) {
            if (!empty($map['AuthInfos'])) {
                $model->authInfos = [];
                $n                = 0;
                foreach ($map['AuthInfos'] as $item) {
                    $model->authInfos[$n++] = null !== $item ? authInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
