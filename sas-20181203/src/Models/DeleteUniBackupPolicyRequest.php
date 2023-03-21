<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteUniBackupPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyIds;
    protected $_name = [
        'policyId'  => 'PolicyId',
        'policyIds' => 'PolicyIds',
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
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUniBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyIds'])) {
            $model->policyIds = $map['PolicyIds'];
        }

        return $model;
    }
}
