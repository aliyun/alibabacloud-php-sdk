<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;

class CreateDataMaskingRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $encAlgorithm;

    /**
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @var string
     */
    public $encryptionKeyMode;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expireTimeOperation;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $riskHandleId;

    /**
     * @var string
     */
    public $subRuleListShrink;

    /**
     * @var string
     */
    public $userListShrink;
    protected $_name = [
        'encAlgorithm' => 'EncAlgorithm',
        'encryptionKeyId' => 'EncryptionKeyId',
        'encryptionKeyMode' => 'EncryptionKeyMode',
        'engineType' => 'EngineType',
        'expireTime' => 'ExpireTime',
        'expireTimeOperation' => 'ExpireTimeOperation',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'riskHandleId' => 'RiskHandleId',
        'subRuleListShrink' => 'SubRuleList',
        'userListShrink' => 'UserList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encAlgorithm) {
            $res['EncAlgorithm'] = $this->encAlgorithm;
        }

        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }

        if (null !== $this->encryptionKeyMode) {
            $res['EncryptionKeyMode'] = $this->encryptionKeyMode;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expireTimeOperation) {
            $res['ExpireTimeOperation'] = $this->expireTimeOperation;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->riskHandleId) {
            $res['RiskHandleId'] = $this->riskHandleId;
        }

        if (null !== $this->subRuleListShrink) {
            $res['SubRuleList'] = $this->subRuleListShrink;
        }

        if (null !== $this->userListShrink) {
            $res['UserList'] = $this->userListShrink;
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
        if (isset($map['EncAlgorithm'])) {
            $model->encAlgorithm = $map['EncAlgorithm'];
        }

        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }

        if (isset($map['EncryptionKeyMode'])) {
            $model->encryptionKeyMode = $map['EncryptionKeyMode'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ExpireTimeOperation'])) {
            $model->expireTimeOperation = $map['ExpireTimeOperation'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RiskHandleId'])) {
            $model->riskHandleId = $map['RiskHandleId'];
        }

        if (isset($map['SubRuleList'])) {
            $model->subRuleListShrink = $map['SubRuleList'];
        }

        if (isset($map['UserList'])) {
            $model->userListShrink = $map['UserList'];
        }

        return $model;
    }
}
