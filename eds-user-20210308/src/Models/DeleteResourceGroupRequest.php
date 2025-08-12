<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DeleteResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $resourceGroupIds;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupIds)) {
            Model::validateArray($this->resourceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceGroupIds) {
            if (\is_array($this->resourceGroupIds)) {
                $res['ResourceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupIds as $item1) {
                    $res['ResourceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = [];
                $n1 = 0;
                foreach ($map['ResourceGroupIds'] as $item1) {
                    $model->resourceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
