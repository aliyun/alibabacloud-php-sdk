<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupMachineStatusRequest extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @example eb2c782e-64f2-4590-a86c-d90164df****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'policyId'      => 'PolicyId',
        'policyVersion' => 'PolicyVersion',
        'uuid'          => 'Uuid',
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
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupMachineStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
