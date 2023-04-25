<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\AppendCasesRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 01012345678
     *
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @example 071*****801
     *
     * @var string
     */
    public $maskedCallee;

    /**
     * @example 188888****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 01
     *
     * @var string
     */
    public $referenceId;
    protected $_name = [
        'agentId'         => 'AgentId',
        'caller'          => 'Caller',
        'customVariables' => 'CustomVariables',
        'maskedCallee'    => 'MaskedCallee',
        'phoneNumber'     => 'PhoneNumber',
        'referenceId'     => 'ReferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
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

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
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
