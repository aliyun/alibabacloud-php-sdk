<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CancelAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $dbfsIds;

    /**
     * @example sp-z5siir3iq3m**********
     *
     * @var string
     */
    public $policyId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dbfsIds'  => 'DbfsIds',
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbfsIds) {
            $res['DbfsIds'] = $this->dbfsIds;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbfsIds'])) {
            if (!empty($map['DbfsIds'])) {
                $model->dbfsIds = $map['DbfsIds'];
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
