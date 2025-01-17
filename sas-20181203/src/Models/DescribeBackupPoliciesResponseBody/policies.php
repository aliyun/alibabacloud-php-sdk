<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class policies extends Model
{
    /**
     * @var int
     */
    public $clientErrorCount;
    /**
     * @var string[]
     */
    public $clientErrorUuidList;
    /**
     * @var string
     */
    public $clientStatus;
    /**
     * @var int
     */
    public $healthClientCount;
    /**
     * @var string[]
     */
    public $healthClientUuidList;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $lastStatusSyncTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $policy;
    /**
     * @var string
     */
    public $policyRegionId;
    /**
     * @var string
     */
    public $policyVersion;
    /**
     * @var string
     */
    public $preStatus;
    /**
     * @var string[]
     */
    public $remarkedUuidList;
    /**
     * @var string
     */
    public $serverType;
    /**
     * @var int
     */
    public $serviceErrorCount;
    /**
     * @var string[]
     */
    public $serviceErrorUuidList;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $upgradeStatus;
    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'clientErrorCount'     => 'ClientErrorCount',
        'clientErrorUuidList'  => 'ClientErrorUuidList',
        'clientStatus'         => 'ClientStatus',
        'healthClientCount'    => 'HealthClientCount',
        'healthClientUuidList' => 'HealthClientUuidList',
        'id'                   => 'Id',
        'lastStatusSyncTime'   => 'LastStatusSyncTime',
        'name'                 => 'Name',
        'policy'               => 'Policy',
        'policyRegionId'       => 'PolicyRegionId',
        'policyVersion'        => 'PolicyVersion',
        'preStatus'            => 'PreStatus',
        'remarkedUuidList'     => 'RemarkedUuidList',
        'serverType'           => 'ServerType',
        'serviceErrorCount'    => 'ServiceErrorCount',
        'serviceErrorUuidList' => 'ServiceErrorUuidList',
        'status'               => 'Status',
        'upgradeStatus'        => 'UpgradeStatus',
        'uuidList'             => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->clientErrorUuidList)) {
            Model::validateArray($this->clientErrorUuidList);
        }
        if (\is_array($this->healthClientUuidList)) {
            Model::validateArray($this->healthClientUuidList);
        }
        if (\is_array($this->remarkedUuidList)) {
            Model::validateArray($this->remarkedUuidList);
        }
        if (\is_array($this->serviceErrorUuidList)) {
            Model::validateArray($this->serviceErrorUuidList);
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientErrorCount) {
            $res['ClientErrorCount'] = $this->clientErrorCount;
        }

        if (null !== $this->clientErrorUuidList) {
            if (\is_array($this->clientErrorUuidList)) {
                $res['ClientErrorUuidList'] = [];
                $n1                         = 0;
                foreach ($this->clientErrorUuidList as $item1) {
                    $res['ClientErrorUuidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }

        if (null !== $this->healthClientCount) {
            $res['HealthClientCount'] = $this->healthClientCount;
        }

        if (null !== $this->healthClientUuidList) {
            if (\is_array($this->healthClientUuidList)) {
                $res['HealthClientUuidList'] = [];
                $n1                          = 0;
                foreach ($this->healthClientUuidList as $item1) {
                    $res['HealthClientUuidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastStatusSyncTime) {
            $res['LastStatusSyncTime'] = $this->lastStatusSyncTime;
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

        if (null !== $this->preStatus) {
            $res['PreStatus'] = $this->preStatus;
        }

        if (null !== $this->remarkedUuidList) {
            if (\is_array($this->remarkedUuidList)) {
                $res['RemarkedUuidList'] = [];
                $n1                      = 0;
                foreach ($this->remarkedUuidList as $item1) {
                    $res['RemarkedUuidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        if (null !== $this->serviceErrorCount) {
            $res['ServiceErrorCount'] = $this->serviceErrorCount;
        }

        if (null !== $this->serviceErrorUuidList) {
            if (\is_array($this->serviceErrorUuidList)) {
                $res['ServiceErrorUuidList'] = [];
                $n1                          = 0;
                foreach ($this->serviceErrorUuidList as $item1) {
                    $res['ServiceErrorUuidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1              = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientErrorCount'])) {
            $model->clientErrorCount = $map['ClientErrorCount'];
        }

        if (isset($map['ClientErrorUuidList'])) {
            if (!empty($map['ClientErrorUuidList'])) {
                $model->clientErrorUuidList = [];
                $n1                         = 0;
                foreach ($map['ClientErrorUuidList'] as $item1) {
                    $model->clientErrorUuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }

        if (isset($map['HealthClientCount'])) {
            $model->healthClientCount = $map['HealthClientCount'];
        }

        if (isset($map['HealthClientUuidList'])) {
            if (!empty($map['HealthClientUuidList'])) {
                $model->healthClientUuidList = [];
                $n1                          = 0;
                foreach ($map['HealthClientUuidList'] as $item1) {
                    $model->healthClientUuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastStatusSyncTime'])) {
            $model->lastStatusSyncTime = $map['LastStatusSyncTime'];
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

        if (isset($map['PreStatus'])) {
            $model->preStatus = $map['PreStatus'];
        }

        if (isset($map['RemarkedUuidList'])) {
            if (!empty($map['RemarkedUuidList'])) {
                $model->remarkedUuidList = [];
                $n1                      = 0;
                foreach ($map['RemarkedUuidList'] as $item1) {
                    $model->remarkedUuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        if (isset($map['ServiceErrorCount'])) {
            $model->serviceErrorCount = $map['ServiceErrorCount'];
        }

        if (isset($map['ServiceErrorUuidList'])) {
            if (!empty($map['ServiceErrorUuidList'])) {
                $model->serviceErrorUuidList = [];
                $n1                          = 0;
                foreach ($map['ServiceErrorUuidList'] as $item1) {
                    $model->serviceErrorUuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1              = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
