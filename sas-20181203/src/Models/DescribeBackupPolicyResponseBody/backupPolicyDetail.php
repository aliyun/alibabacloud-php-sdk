<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class backupPolicyDetail extends Model
{
    /**
     * @example running
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @example 51880
     *
     * @var int
     */
    public $id;

    /**
     * @example testBuckUp
     *
     * @var string
     */
    public $name;

    /**
     * @description DescribeBackupPolicy
     *
     * @example {
     * "System Volume Information\\",
     * "Users\\Administrator\\NTUSER.DAT*",
     * "pagefile.sys",
     * "Users\\Default\\NTUSER.DAT*",
     * "Users\\Administrator\\ntuser.*"
     * }
     * @var string
     */
    public $policy;

    /**
     * @description Queries the details of an anti-ransomware policy for servers.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example closed
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'clientStatus'  => 'ClientStatus',
        'id'            => 'Id',
        'name'          => 'Name',
        'policy'        => 'Policy',
        'policyVersion' => 'PolicyVersion',
        'regionId'      => 'RegionId',
        'status'        => 'Status',
        'uuidList'      => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPolicyDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
