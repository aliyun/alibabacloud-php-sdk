<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $promptParam;

    /**
     * @var string
     */
    public $scenesCode;

    /**
     * @var int
     */
    public $skillType;

    /**
     * @var string
     */
    public $startWordParam;

    /**
     * @var string
     */
    public $tenantCode;
    protected $_name = [
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'callerNumber' => 'CallerNumber',
        'productCode' => 'ProductCode',
        'promptParam' => 'PromptParam',
        'scenesCode' => 'ScenesCode',
        'skillType' => 'SkillType',
        'startWordParam' => 'StartWordParam',
        'tenantCode' => 'TenantCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->promptParam) {
            $res['PromptParam'] = $this->promptParam;
        }

        if (null !== $this->scenesCode) {
            $res['ScenesCode'] = $this->scenesCode;
        }

        if (null !== $this->skillType) {
            $res['SkillType'] = $this->skillType;
        }

        if (null !== $this->startWordParam) {
            $res['StartWordParam'] = $this->startWordParam;
        }

        if (null !== $this->tenantCode) {
            $res['TenantCode'] = $this->tenantCode;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['PromptParam'])) {
            $model->promptParam = $map['PromptParam'];
        }

        if (isset($map['ScenesCode'])) {
            $model->scenesCode = $map['ScenesCode'];
        }

        if (isset($map['SkillType'])) {
            $model->skillType = $map['SkillType'];
        }

        if (isset($map['StartWordParam'])) {
            $model->startWordParam = $map['StartWordParam'];
        }

        if (isset($map['TenantCode'])) {
            $model->tenantCode = $map['TenantCode'];
        }

        return $model;
    }
}
