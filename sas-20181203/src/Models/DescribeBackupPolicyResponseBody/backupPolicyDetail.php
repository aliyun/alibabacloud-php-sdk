<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class backupPolicyDetail extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $policyVersion;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'status'        => 'Status',
        'policyVersion' => 'PolicyVersion',
        'policy'        => 'Policy',
        'clientStatus'  => 'ClientStatus',
        'name'          => 'Name',
        'id'            => 'Id',
        'regionId'      => 'RegionId',
        'uuidList'      => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
