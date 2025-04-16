<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class WorkspaceSpec extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeType;

    /**
     * @var bool
     */
    public $isGuaranteedValid;

    /**
     * @var bool
     */
    public $isOverSoldValid;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var ResourceAmount
     */
    public $spec;

    /**
     * @var string
     */
    public $specName;
    protected $_name = [
        'code' => 'Code',
        'codeType' => 'CodeType',
        'isGuaranteedValid' => 'IsGuaranteedValid',
        'isOverSoldValid' => 'IsOverSoldValid',
        'reason' => 'Reason',
        'spec' => 'Spec',
        'specName' => 'SpecName',
    ];

    public function validate()
    {
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }

        if (null !== $this->isGuaranteedValid) {
            $res['IsGuaranteedValid'] = $this->isGuaranteedValid;
        }

        if (null !== $this->isOverSoldValid) {
            $res['IsOverSoldValid'] = $this->isOverSoldValid;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }

        if (isset($map['IsGuaranteedValid'])) {
            $model->isGuaranteedValid = $map['IsGuaranteedValid'];
        }

        if (isset($map['IsOverSoldValid'])) {
            $model->isOverSoldValid = $map['IsOverSoldValid'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Spec'])) {
            $model->spec = ResourceAmount::fromMap($map['Spec']);
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
