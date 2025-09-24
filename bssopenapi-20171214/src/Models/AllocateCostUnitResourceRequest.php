<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest\resourceInstanceList;

class AllocateCostUnitResourceRequest extends Model
{
    /**
     * @var int
     */
    public $fromUnitId;

    /**
     * @var int
     */
    public $fromUnitUserId;

    /**
     * @var resourceInstanceList[]
     */
    public $resourceInstanceList;

    /**
     * @var int
     */
    public $toUnitId;

    /**
     * @var int
     */
    public $toUnitUserId;
    protected $_name = [
        'fromUnitId' => 'FromUnitId',
        'fromUnitUserId' => 'FromUnitUserId',
        'resourceInstanceList' => 'ResourceInstanceList',
        'toUnitId' => 'ToUnitId',
        'toUnitUserId' => 'ToUnitUserId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceInstanceList)) {
            Model::validateArray($this->resourceInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromUnitId) {
            $res['FromUnitId'] = $this->fromUnitId;
        }

        if (null !== $this->fromUnitUserId) {
            $res['FromUnitUserId'] = $this->fromUnitUserId;
        }

        if (null !== $this->resourceInstanceList) {
            if (\is_array($this->resourceInstanceList)) {
                $res['ResourceInstanceList'] = [];
                $n1 = 0;
                foreach ($this->resourceInstanceList as $item1) {
                    $res['ResourceInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toUnitId) {
            $res['ToUnitId'] = $this->toUnitId;
        }

        if (null !== $this->toUnitUserId) {
            $res['ToUnitUserId'] = $this->toUnitUserId;
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
        if (isset($map['FromUnitId'])) {
            $model->fromUnitId = $map['FromUnitId'];
        }

        if (isset($map['FromUnitUserId'])) {
            $model->fromUnitUserId = $map['FromUnitUserId'];
        }

        if (isset($map['ResourceInstanceList'])) {
            if (!empty($map['ResourceInstanceList'])) {
                $model->resourceInstanceList = [];
                $n1 = 0;
                foreach ($map['ResourceInstanceList'] as $item1) {
                    $model->resourceInstanceList[$n1] = resourceInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ToUnitId'])) {
            $model->toUnitId = $map['ToUnitId'];
        }

        if (isset($map['ToUnitUserId'])) {
            $model->toUnitUserId = $map['ToUnitUserId'];
        }

        return $model;
    }
}
