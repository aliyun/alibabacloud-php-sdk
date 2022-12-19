<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class backupPolicyDetail extends Model
{
    /**
     * @description The status of the anti-ransomware agent. Valid values:
     *
     *   **running**: normal
     *   **exception**: abnormal
     *
     * @example running
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example 51880
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the anti-ransomware policy.
     *
     * @example testBuckUp
     *
     * @var string
     */
    public $name;

    /**
     * @description *   **IsDefault**: the type of the anti-ransomware policy. Valid values:
     *
     *   **1**: recommended policy
     *   **0**: custom policy
     *
     *   **Include**: the format of the files that you want to protect. If you want to protect the files in all formats, set this field to \[].
     *
     *   **Source**: the directory that you want to protect. If you want to protect all directories, set this field to \[].
     *
     *   **ExcludeSystemPath**: specifies whether to exclude a specific directory from the anti-ransomware policy. If you want to exclude a directory, set this field to **true**. If you do not want to exclude a directory, leave this field empty.
     *
     *   **Exclude**: the directory that you want to exclude from the anti-ransomware policy. If you do not want to exclude a directory, set this field to \[].
     *
     *   **Schedule**: the start time and interval of a data backup task. We recommend that you specify a start time that begins during off-peak hours but does not start on the hour. Examples:
     *
     *   If you set this field to I|1583216092|P21D, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of three weeks.
     *   If you set this field to I|1583216092|PT24H, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of 24 hours.
     *
     *   **Retention**: the period during which backup data is retained. Unit: days. If you set this field to 7, backup data is retained for a week. If you set this field to 365, backup data is retained for a year. If you set this field to -1, backup data is permanently retained.
     *
     *   **SpeedLimiter**: the limit on the network bandwidth for data backup tasks. If you set this field to 0:24:30720, the maximum bandwidth for a data backup task is 30 MB/s from 00:00 to 24:00.
     *
     *   **UseVss**: specifies whether to enable the VSS feature. The feature is available only for Windows servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  The VSS feature is available only if you create the anti-ransomware policy for Windows servers. After you enable the feature, the number of backup failures due to running processes is significantly reduced. We recommend that you enable the VSS feature. After you enable the feature, the data of disks that are in the exFAT and FAT32 formats cannot be backed up.
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
     * @description The version of the anti-ransomware policy.
     *
     *   **1.0.0**
     *   **2.0.0**
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @description The ID of the region in which backup data is stored.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the anti-ransomware policy. Valid values:
     *
     *   **enabled**: The anti-ransomware policy is manually enabled.
     *   **disabled**: The anti-ransomware policy is manually disabled. After an anti-ransomware policy is disabled, the data backup task that is running based on the policy stops.
     *   **closed**: The anti-ransomware policy automatically stops because the anti-ransomware capacity is insufficient.
     *
     * @example closed
     *
     * @var string
     */
    public $status;

    /**
     * @description An array consisting of the UUIDs of the servers to which the anti-ransomware policy is applied.
     *
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
