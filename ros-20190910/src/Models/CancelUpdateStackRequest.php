<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CancelUpdateStackRequest extends Model
{
    /**
     * @var string
     */
    public $cancelType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'cancelType' => 'CancelType',
        'regionId'   => 'RegionId',
        'stackId'    => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelType) {
            $res['CancelType'] = $this->cancelType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelUpdateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancelType'])) {
            $model->cancelType = $map['CancelType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
