<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class DescribePhoneNumberAnalysisAIRequest extends Model
{
    /**
     * @example HwD***nG
     *
     * @var string
     */
    public $authCode;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $inputNumber;

    /**
     * @example {"trainingJobId": "17**********48"}
     *
     * @var string
     */
    public $modelConfig;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 96
     *
     * @var int
     */
    public $rate;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'authCode'             => 'AuthCode',
        'inputNumber'          => 'InputNumber',
        'modelConfig'          => 'ModelConfig',
        'ownerId'              => 'OwnerId',
        'rate'                 => 'Rate',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->inputNumber) {
            $res['InputNumber'] = $this->inputNumber;
        }
        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = $this->modelConfig;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhoneNumberAnalysisAIRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['InputNumber'])) {
            $model->inputNumber = $map['InputNumber'];
        }
        if (isset($map['ModelConfig'])) {
            $model->modelConfig = $map['ModelConfig'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
