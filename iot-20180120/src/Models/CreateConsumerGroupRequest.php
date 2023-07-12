<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'groupName'     => 'GroupName',
        'iotInstanceId' => 'IotInstanceId',
        'subBizCode'    => 'SubBizCode',
        'type'          => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
