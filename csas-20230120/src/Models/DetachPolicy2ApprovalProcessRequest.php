<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DetachPolicy2ApprovalProcessRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ladp-27a4fedf5e73****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description This parameter is required.
     *
     * @example PeripheralBlock
     *
     * @var string
     */
    public $policyType;

    /**
     * @description This parameter is required.
     *
     * @example approval-process-2677fcf063f5****
     *
     * @var string
     */
    public $processId;
    protected $_name = [
        'policyId'   => 'PolicyId',
        'policyType' => 'PolicyType',
        'processId'  => 'ProcessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachPolicy2ApprovalProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        return $model;
    }
}
