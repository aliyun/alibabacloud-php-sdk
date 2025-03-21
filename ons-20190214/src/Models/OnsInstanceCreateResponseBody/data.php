<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceCreateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the instance that you created.
     *
     * @example MQ_INST_188077086902****_BXSuW61e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The edition of the instance that you created. Valid value:
     *
     *   **1**: Standard Edition instances
     *
     * @example 1
     *
     * @var int
     */
    public $instanceType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
