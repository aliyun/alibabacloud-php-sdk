<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceRequest\resourceInstanceList;

class AllocateCostCenterResourceRequest extends Model
{
    /**
     * @var int
     */
    public $fromCostCenterId;

    /**
     * @var int
     */
    public $fromOwnerAccountId;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var resourceInstanceList[]
     */
    public $resourceInstanceList;

    /**
     * @var int
     */
    public $toCostCenterId;
    protected $_name = [
        'fromCostCenterId' => 'FromCostCenterId',
        'fromOwnerAccountId' => 'FromOwnerAccountId',
        'nbid' => 'Nbid',
        'resourceInstanceList' => 'ResourceInstanceList',
        'toCostCenterId' => 'ToCostCenterId',
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
        if (null !== $this->fromCostCenterId) {
            $res['FromCostCenterId'] = $this->fromCostCenterId;
        }

        if (null !== $this->fromOwnerAccountId) {
            $res['FromOwnerAccountId'] = $this->fromOwnerAccountId;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
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

        if (null !== $this->toCostCenterId) {
            $res['ToCostCenterId'] = $this->toCostCenterId;
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
        if (isset($map['FromCostCenterId'])) {
            $model->fromCostCenterId = $map['FromCostCenterId'];
        }

        if (isset($map['FromOwnerAccountId'])) {
            $model->fromOwnerAccountId = $map['FromOwnerAccountId'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
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

        if (isset($map['ToCostCenterId'])) {
            $model->toCostCenterId = $map['ToCostCenterId'];
        }

        return $model;
    }
}
