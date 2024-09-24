<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigInstanceRemarkRequest extends Model
{
    /**
     * @description The HSM ID.
     *
     * This parameter is required.
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The description.
     *
     * This parameter is required.
     * @example hsmOnline
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'remark'     => 'Remark',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigInstanceRemarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
