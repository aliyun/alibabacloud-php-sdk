<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c-123xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example for test
     *
     * @var string
     */
    public $reason;

    /**
     * @example dataCoord:\\n  segment:\\n    maxSize: 1024
     *
     * @var string
     */
    public $userConfig;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'reason'     => 'Reason',
        'userConfig' => 'UserConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->userConfig) {
            $res['UserConfig'] = $this->userConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
        }

        return $model;
    }
}
