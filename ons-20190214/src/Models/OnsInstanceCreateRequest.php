<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsInstanceCreateRequest extends Model
{
    /**
     * @description The name of the instance. The name must meet the following rules:
     *
     *   The name of the instance must be unique in the region where the instance is deployed.
     *   The name must be 3 to 64 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * @example Test instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The description of the instance.
     *
     * @example Description
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'remark'       => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return OnsInstanceCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
