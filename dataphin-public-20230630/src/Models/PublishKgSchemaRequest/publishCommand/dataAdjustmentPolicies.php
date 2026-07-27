<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishKgSchemaRequest\publishCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishKgSchemaRequest\publishCommand\dataAdjustmentPolicies\backFillDefaultValuePolicy;

class dataAdjustmentPolicies extends Model
{
    /**
     * @var backFillDefaultValuePolicy
     */
    public $backFillDefaultValuePolicy;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeCode;
    protected $_name = [
        'backFillDefaultValuePolicy' => 'BackFillDefaultValuePolicy',
        'policyType' => 'PolicyType',
        'type' => 'Type',
        'typeCode' => 'TypeCode',
    ];

    public function validate()
    {
        if (null !== $this->backFillDefaultValuePolicy) {
            $this->backFillDefaultValuePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backFillDefaultValuePolicy) {
            $res['BackFillDefaultValuePolicy'] = null !== $this->backFillDefaultValuePolicy ? $this->backFillDefaultValuePolicy->toArray($noStream) : $this->backFillDefaultValuePolicy;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
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
        if (isset($map['BackFillDefaultValuePolicy'])) {
            $model->backFillDefaultValuePolicy = backFillDefaultValuePolicy::fromMap($map['BackFillDefaultValuePolicy']);
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }

        return $model;
    }
}
