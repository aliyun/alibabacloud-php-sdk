<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteRuleActionRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $actionId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'actionId'      => 'ActionId',
    ];

    public function validate()
    {
        Model::validateRequired('actionId', $this->actionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRuleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }

        return $model;
    }
}
