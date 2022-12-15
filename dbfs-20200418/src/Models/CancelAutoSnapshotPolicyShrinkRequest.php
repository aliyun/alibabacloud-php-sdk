<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CancelAutoSnapshotPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dbfsIdsShrink;

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
        'dbfsIdsShrink' => 'DbfsIds',
        'policyId'      => 'PolicyId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbfsIdsShrink) {
            $res['DbfsIds'] = $this->dbfsIdsShrink;
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
     * @return CancelAutoSnapshotPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbfsIds'])) {
            $model->dbfsIdsShrink = $map['DbfsIds'];
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
