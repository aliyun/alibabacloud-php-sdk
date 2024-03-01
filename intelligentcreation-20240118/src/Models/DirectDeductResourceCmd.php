<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class DirectDeductResourceCmd extends Model
{
    /**
     * @example 123123424
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 60
     *
     * @var int
     */
    public $cost;

    /**
     * @example 0,1,2,201,3,4
     *
     * @var string
     */
    public $deductScene;

    /**
     * @example 12249732894
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @example 28274623764834
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @example 123123424
     *
     * @var string
     */
    public $subAccountId;

    /**
     * @example dfshskdfjsdlfjafjls
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'accountId'    => 'accountId',
        'cost'         => 'cost',
        'deductScene'  => 'deductScene',
        'extraInfo'    => 'extraInfo',
        'idempotentId' => 'idempotentId',
        'resourceType' => 'resourceType',
        'subAccountId' => 'subAccountId',
        'token'        => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }
        if (null !== $this->deductScene) {
            $res['deductScene'] = $this->deductScene;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DirectDeductResourceCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }
        if (isset($map['deductScene'])) {
            $model->deductScene = $map['deductScene'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
