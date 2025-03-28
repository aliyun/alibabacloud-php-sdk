<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class GetStackResourceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $resourceAttributes;

    /**
     * @var bool
     */
    public $showResourceAttributes;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'logicalResourceId' => 'LogicalResourceId',
        'regionId' => 'RegionId',
        'resourceAttributes' => 'ResourceAttributes',
        'showResourceAttributes' => 'ShowResourceAttributes',
        'stackId' => 'StackId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceAttributes)) {
            Model::validateArray($this->resourceAttributes);
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
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceAttributes) {
            if (\is_array($this->resourceAttributes)) {
                $res['ResourceAttributes'] = [];
                $n1 = 0;
                foreach ($this->resourceAttributes as $item1) {
                    $res['ResourceAttributes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->showResourceAttributes) {
            $res['ShowResourceAttributes'] = $this->showResourceAttributes;
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
            $model->logicalResourceId = $map['LogicalResourceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceAttributes'])) {
            if (!empty($map['ResourceAttributes'])) {
                $model->resourceAttributes = [];
                $n1 = 0;
                foreach ($map['ResourceAttributes'] as $item1) {
                    $model->resourceAttributes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ShowResourceAttributes'])) {
            $model->showResourceAttributes = $map['ShowResourceAttributes'];
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
