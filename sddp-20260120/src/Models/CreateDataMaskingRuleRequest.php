<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CreateDataMaskingRuleRequest\subRuleList;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CreateDataMaskingRuleRequest\userList;

class CreateDataMaskingRuleRequest extends Model
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
     * @var subRuleList[]
     */
    public $subRuleList;

    /**
     * @var userList[]
     */
    public $userList;
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
        'subRuleList' => 'SubRuleList',
        'userList' => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->subRuleList)) {
            Model::validateArray($this->subRuleList);
        }
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
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

        if (null !== $this->subRuleList) {
            if (\is_array($this->subRuleList)) {
                $res['SubRuleList'] = [];
                $n1 = 0;
                foreach ($this->subRuleList as $item1) {
                    $res['SubRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['SubRuleList'])) {
                $model->subRuleList = [];
                $n1 = 0;
                foreach ($map['SubRuleList'] as $item1) {
                    $model->subRuleList[$n1] = subRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1] = userList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
