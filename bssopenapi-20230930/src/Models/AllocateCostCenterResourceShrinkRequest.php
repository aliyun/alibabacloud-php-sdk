<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class AllocateCostCenterResourceShrinkRequest extends Model
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
     * @var string
     */
    public $resourceInstanceListShrink;

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
        'resourceInstanceListShrink' => 'ResourceInstanceList',
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
        if (null !== $this->resourceInstanceListShrink) {
            $res['ResourceInstanceList'] = $this->resourceInstanceListShrink;
        }
        if (null !== $this->toCostCenterId) {
            $res['ToCostCenterId'] = $this->toCostCenterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateCostCenterResourceShrinkRequest
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
            $model->resourceInstanceListShrink = $map['ResourceInstanceList'];
        }
        if (isset($map['ToCostCenterId'])) {
            $model->toCostCenterId = $map['ToCostCenterId'];
        }

        return $model;
    }
}
