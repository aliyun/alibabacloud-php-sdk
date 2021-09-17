<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @var int
     */
    public $clientErrorCount;

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
    public $upgradeStatus;

    /**
     * @var int
     */
    public $serviceErrorCount;

    /**
     * @var string
     */
    public $policyRegionId;

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
    public $healthClientCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $clientErrorUuidList;

    /**
     * @var string[]
     */
    public $remarkedUuidList;

    /**
     * @var string[]
     */
    public $uuidList;

    /**
     * @var string[]
     */
    public $serviceErrorUuidList;

    /**
     * @var string[]
     */
    public $healthClientUuidList;
    protected $_name = [
        'clientErrorCount'     => 'ClientErrorCount',
        'status'               => 'Status',
        'policyVersion'        => 'PolicyVersion',
        'policy'               => 'Policy',
        'upgradeStatus'        => 'UpgradeStatus',
        'serviceErrorCount'    => 'ServiceErrorCount',
        'policyRegionId'       => 'PolicyRegionId',
        'clientStatus'         => 'ClientStatus',
        'name'                 => 'Name',
        'healthClientCount'    => 'HealthClientCount',
        'id'                   => 'Id',
        'clientErrorUuidList'  => 'ClientErrorUuidList',
        'remarkedUuidList'     => 'RemarkedUuidList',
        'uuidList'             => 'UuidList',
        'serviceErrorUuidList' => 'ServiceErrorUuidList',
        'healthClientUuidList' => 'HealthClientUuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientErrorCount) {
            $res['ClientErrorCount'] = $this->clientErrorCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }
        if (null !== $this->serviceErrorCount) {
            $res['ServiceErrorCount'] = $this->serviceErrorCount;
        }
        if (null !== $this->policyRegionId) {
            $res['PolicyRegionId'] = $this->policyRegionId;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->healthClientCount) {
            $res['HealthClientCount'] = $this->healthClientCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clientErrorUuidList) {
            $res['ClientErrorUuidList'] = $this->clientErrorUuidList;
        }
        if (null !== $this->remarkedUuidList) {
            $res['RemarkedUuidList'] = $this->remarkedUuidList;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }
        if (null !== $this->serviceErrorUuidList) {
            $res['ServiceErrorUuidList'] = $this->serviceErrorUuidList;
        }
        if (null !== $this->healthClientUuidList) {
            $res['HealthClientUuidList'] = $this->healthClientUuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientErrorCount'])) {
            $model->clientErrorCount = $map['ClientErrorCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }
        if (isset($map['ServiceErrorCount'])) {
            $model->serviceErrorCount = $map['ServiceErrorCount'];
        }
        if (isset($map['PolicyRegionId'])) {
            $model->policyRegionId = $map['PolicyRegionId'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HealthClientCount'])) {
            $model->healthClientCount = $map['HealthClientCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClientErrorUuidList'])) {
            if (!empty($map['ClientErrorUuidList'])) {
                $model->clientErrorUuidList = $map['ClientErrorUuidList'];
            }
        }
        if (isset($map['RemarkedUuidList'])) {
            if (!empty($map['RemarkedUuidList'])) {
                $model->remarkedUuidList = $map['RemarkedUuidList'];
            }
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }
        if (isset($map['ServiceErrorUuidList'])) {
            if (!empty($map['ServiceErrorUuidList'])) {
                $model->serviceErrorUuidList = $map['ServiceErrorUuidList'];
            }
        }
        if (isset($map['HealthClientUuidList'])) {
            if (!empty($map['HealthClientUuidList'])) {
                $model->healthClientUuidList = $map['HealthClientUuidList'];
            }
        }

        return $model;
    }
}
