<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\extConfig;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\networkInfo;
use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var extConfig
     */
    public $extConfig;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var networkInfo
     */
    public $networkInfo;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'extConfig'    => 'extConfig',
        'instanceName' => 'instanceName',
        'networkInfo'  => 'networkInfo',
        'remark'       => 'remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extConfig) {
            $res['extConfig'] = null !== $this->extConfig ? $this->extConfig->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->networkInfo) {
            $res['networkInfo'] = null !== $this->networkInfo ? $this->networkInfo->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extConfig'])) {
            $model->extConfig = extConfig::fromMap($map['extConfig']);
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['networkInfo'])) {
            $model->networkInfo = networkInfo::fromMap($map['networkInfo']);
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
