<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class DetectStackDriftRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string[]
     */
    public $logicalResourceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'logicalResourceId' => 'LogicalResourceId',
        'regionId'          => 'RegionId',
        'stackId'           => 'StackId',
    ];

    public function validate()
    {
        if (\is_array($this->logicalResourceId)) {
            Model::validateArray($this->logicalResourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->logicalResourceId) {
            if (\is_array($this->logicalResourceId)) {
                $res['LogicalResourceId'] = [];
                $n1                       = 0;
                foreach ($this->logicalResourceId as $item1) {
                    $res['LogicalResourceId'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['LogicalResourceId'])) {
            if (!empty($map['LogicalResourceId'])) {
                $model->logicalResourceId = [];
                $n1                       = 0;
                foreach ($map['LogicalResourceId'] as $item1) {
                    $model->logicalResourceId[$n1++] = $item1;
                }
            }
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
