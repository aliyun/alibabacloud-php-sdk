<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesResponseBody\processes;

use AlibabaCloud\Tea\Model;

class deviceRegistrationPolicies extends Model
{
    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @example approval-schema-090134f1ebff****
     *
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'policyIds' => 'PolicyIds',
        'schemaId'  => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceRegistrationPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
