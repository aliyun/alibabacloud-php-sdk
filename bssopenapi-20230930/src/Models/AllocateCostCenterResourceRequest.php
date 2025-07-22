<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceRequest\resourceInstanceList;
use AlibabaCloud\Tea\Model;

class AllocateCostCenterResourceRequest extends Model
{
    /**
     * @example 637180
     *
     * @var int
     */
    public $fromCostCenterId;

    /**
     * @example 1529600453335198
     *
     * @var int
     */
    public $fromOwnerAccountId;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @description This parameter is required.
     *
     * @var resourceInstanceList[]
     */
    public $resourceInstanceList;

    /**
     * @example 638288
     *
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

    public function validate() {}

    public function toMap()
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
            $res['ResourceInstanceList'] = [];
            if (null !== $this->resourceInstanceList && \is_array($this->resourceInstanceList)) {
                $n = 0;
                foreach ($this->resourceInstanceList as $item) {
                    $res['ResourceInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->toCostCenterId) {
            $res['ToCostCenterId'] = $this->toCostCenterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateCostCenterResourceRequest
     */
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
                $n = 0;
                foreach ($map['ResourceInstanceList'] as $item) {
                    $model->resourceInstanceList[$n++] = null !== $item ? resourceInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ToCostCenterId'])) {
            $model->toCostCenterId = $map['ToCostCenterId'];
        }

        return $model;
    }
}
