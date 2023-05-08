<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description The region ID of the server to which the anti-ransomware policy is applied.
     *
     * You can call the [DescribeSupportRegion](~~DescribeSupportRegion~~) operation to query the regions in which the anti-ransomware feature is supported.
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @description Modifies an anti-ransomware policy.
     *
     * @example policy_name_A
     *
     * @var string
     */
    public $name;

    /**
     * @description ModifyBackupPolicy
     *
     * @example {"Source":["home","admin"]}
     *
     * @var mixed[]
     */
    public $policy;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $policyRegionId;

    /**
     * @description WB01014029
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @example ["3bb30859-b3b5-4f28-868f-b0892c98****", "3bb30859-b3b5-4f28-868f-b0892c98****"]
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'id'             => 'Id',
        'name'           => 'Name',
        'policy'         => 'Policy',
        'policyRegionId' => 'PolicyRegionId',
        'policyVersion'  => 'PolicyVersion',
        'uuidList'       => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyRegionId) {
            $res['PolicyRegionId'] = $this->policyRegionId;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyRegionId'])) {
            $model->policyRegionId = $map['PolicyRegionId'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
