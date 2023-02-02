<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsInstanceUpdateRequest extends Model
{
    /**
     * @description The ID of the instance whose name or description you want to update.
     *
     * @example MQ_INST_188077086902****_BXSuW61e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new name of the instance. The name must meet the following rules:
     *
     *   The name of the instance must be unique in the region where the instance is deployed.
     *   The name must be 3 to 64 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     *   If you do not configure this parameter, the instance name remains unchanged.
     *
     * @example Updatedname
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The updated description of the instance. If you do not configure this parameter, the instance description remains unchanged.
     *
     * @example Updateddescription
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'remark'       => 'Remark',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsInstanceUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
