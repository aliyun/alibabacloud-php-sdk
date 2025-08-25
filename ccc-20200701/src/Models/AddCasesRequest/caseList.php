<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesRequest;

use AlibabaCloud\Dara\Model;

class caseList extends Model
{
    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @var string
     */
    public $maskedCallee;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $referenceId;
    protected $_name = [
        'caller' => 'Caller',
        'customVariables' => 'CustomVariables',
        'maskedCallee' => 'MaskedCallee',
        'phoneNumber' => 'PhoneNumber',
        'referenceId' => 'ReferenceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }

        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }

        if (null !== $this->maskedCallee) {
            $res['MaskedCallee'] = $this->maskedCallee;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
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
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }

        if (isset($map['MaskedCallee'])) {
            $model->maskedCallee = $map['MaskedCallee'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        return $model;
    }
}
