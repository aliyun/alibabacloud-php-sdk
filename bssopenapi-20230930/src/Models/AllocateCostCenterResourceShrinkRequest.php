<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class AllocateCostCenterResourceShrinkRequest extends Model
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
     * @var string
     */
    public $resourceInstanceListShrink;

    /**
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

    public function validate()
    {
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

        if (null !== $this->resourceInstanceListShrink) {
            $res['ResourceInstanceList'] = $this->resourceInstanceListShrink;
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
            $model->resourceInstanceListShrink = $map['ResourceInstanceList'];
        }

        if (isset($map['ToCostCenterId'])) {
            $model->toCostCenterId = $map['ToCostCenterId'];
        }

        return $model;
    }
}
