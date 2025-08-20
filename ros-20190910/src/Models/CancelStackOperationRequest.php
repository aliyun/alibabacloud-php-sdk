<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class CancelStackOperationRequest extends Model
{
    /**
     * @var string[]
     */
    public $allowedStackOperations;

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
        'allowedStackOperations' => 'AllowedStackOperations',
        'cancelType' => 'CancelType',
        'regionId' => 'RegionId',
        'stackId' => 'StackId',
    ];

    public function validate()
    {
        if (\is_array($this->allowedStackOperations)) {
            Model::validateArray($this->allowedStackOperations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedStackOperations) {
            if (\is_array($this->allowedStackOperations)) {
                $res['AllowedStackOperations'] = [];
                $n1 = 0;
                foreach ($this->allowedStackOperations as $item1) {
                    $res['AllowedStackOperations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedStackOperations'])) {
            if (!empty($map['AllowedStackOperations'])) {
                $model->allowedStackOperations = [];
                $n1 = 0;
                foreach ($map['AllowedStackOperations'] as $item1) {
                    $model->allowedStackOperations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
