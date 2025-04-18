<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $bizParamShrink;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $promptParamShrink;

    /**
     * @var string
     */
    public $startWordParamShrink;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'bizParamShrink' => 'BizParam',
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'outId' => 'OutId',
        'promptParamShrink' => 'PromptParam',
        'startWordParamShrink' => 'StartWordParam',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->bizParamShrink) {
            $res['BizParam'] = $this->bizParamShrink;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->promptParamShrink) {
            $res['PromptParam'] = $this->promptParamShrink;
        }

        if (null !== $this->startWordParamShrink) {
            $res['StartWordParam'] = $this->startWordParamShrink;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['BizParam'])) {
            $model->bizParamShrink = $map['BizParam'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['PromptParam'])) {
            $model->promptParamShrink = $map['PromptParam'];
        }

        if (isset($map['StartWordParam'])) {
            $model->startWordParamShrink = $map['StartWordParam'];
        }

        return $model;
    }
}
