<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody\list_\details;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody\list_\notes;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The details of the exception.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description The URL to download the malicious image sample.
     *
     * @example https://upgrade-rule-pkg.oss-cn-beijing.aliyuncs.com/totalpackage/rule/V3.166.2/totalpackage_rule_V3.16_6.2_tip_20230220110****
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The file path.
     *
     * @example /root/etc/g****
     *
     * @var int
     */
    public $filePath;

    /**
     * @description The timestamp generated when the first scan was performed. Unit: milliseconds.
     *
     * @example 168257753****
     *
     * @var int
     */
    public $firstScanTimestamp;

    /**
     * @description The highlighted JSON string.
     *
     * @example {\"highlight\":{\"ruleVersion\":\"20230223\",\"ruleId\":600139,\"events\":[[207,284]]}}
     *
     * @var string
     */
    public $highLight;

    /**
     * @description The event ID.
     *
     * @example 1****
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the asset.
     *
     * @example sql-test-001****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The timestamp generated when the last scan was performed. Unit: milliseconds.
     *
     * @example 168257753****
     *
     * @var int
     */
    public $latestScanTimestamp;

    /**
     * @description The severity of the malicious file. Valid values:
     *
     *   serious
     *   suspicious
     *   remind
     *
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @description The MD5 hash value of the malicious file.
     *
     * @example 1f2e13a7c51ee89316ae50066515****
     *
     * @var string
     */
    public $maliciousMd5;

    /**
     * @description The name of the malicious file.
     *
     * @example WebShell
     *
     * @var string
     */
    public $maliciousName;

    /**
     * @var string
     */
    public $maliciousType;

    /**
     * @description The remarks.
     *
     * @var notes[]
     */
    public $notes;

    /**
     * @description The handling result of the exception.
     *
     * @example addWhitelist.USER.Success
     *
     * @var string
     */
    public $operateResult;

    /**
     * @description The timestamp generated when the exception is handled. Unit: milliseconds.
     *
     * @example 168257753****
     *
     * @var string
     */
    public $operateTimestamp;

    /**
     * @description The partition of the disk.
     *
     * @example /dev/xvda1
     *
     * @var string
     */
    public $partition;

    /**
     * @description The ID of the asset that is scanned.
     *
     * @example m-****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the asset that is scanned.
     *
     * @example jenkins****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the asset that is scanned. Valid values:
     *
     *   2: The scanned asset is an image.
     *
     * @example 2
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The UUID of the asset.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'details'             => 'Details',
        'downloadUrl'         => 'DownloadUrl',
        'filePath'            => 'FilePath',
        'firstScanTimestamp'  => 'FirstScanTimestamp',
        'highLight'           => 'HighLight',
        'id'                  => 'Id',
        'instanceName'        => 'InstanceName',
        'internetIp'          => 'InternetIp',
        'intranetIp'          => 'IntranetIp',
        'latestScanTimestamp' => 'LatestScanTimestamp',
        'level'               => 'Level',
        'maliciousMd5'        => 'MaliciousMd5',
        'maliciousName'       => 'MaliciousName',
        'maliciousType'       => 'MaliciousType',
        'notes'               => 'Notes',
        'operateResult'       => 'OperateResult',
        'operateTimestamp'    => 'OperateTimestamp',
        'partition'           => 'Partition',
        'targetId'            => 'TargetId',
        'targetName'          => 'TargetName',
        'targetType'          => 'TargetType',
        'uuid'                => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->firstScanTimestamp) {
            $res['FirstScanTimestamp'] = $this->firstScanTimestamp;
        }
        if (null !== $this->highLight) {
            $res['HighLight'] = $this->highLight;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->latestScanTimestamp) {
            $res['LatestScanTimestamp'] = $this->latestScanTimestamp;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }
        if (null !== $this->maliciousName) {
            $res['MaliciousName'] = $this->maliciousName;
        }
        if (null !== $this->maliciousType) {
            $res['MaliciousType'] = $this->maliciousType;
        }
        if (null !== $this->notes) {
            $res['Notes'] = [];
            if (null !== $this->notes && \is_array($this->notes)) {
                $n = 0;
                foreach ($this->notes as $item) {
                    $res['Notes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operateResult) {
            $res['OperateResult'] = $this->operateResult;
        }
        if (null !== $this->operateTimestamp) {
            $res['OperateTimestamp'] = $this->operateTimestamp;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FirstScanTimestamp'])) {
            $model->firstScanTimestamp = $map['FirstScanTimestamp'];
        }
        if (isset($map['HighLight'])) {
            $model->highLight = $map['HighLight'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LatestScanTimestamp'])) {
            $model->latestScanTimestamp = $map['LatestScanTimestamp'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }
        if (isset($map['MaliciousName'])) {
            $model->maliciousName = $map['MaliciousName'];
        }
        if (isset($map['MaliciousType'])) {
            $model->maliciousType = $map['MaliciousType'];
        }
        if (isset($map['Notes'])) {
            if (!empty($map['Notes'])) {
                $model->notes = [];
                $n            = 0;
                foreach ($map['Notes'] as $item) {
                    $model->notes[$n++] = null !== $item ? notes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperateResult'])) {
            $model->operateResult = $map['OperateResult'];
        }
        if (isset($map['OperateTimestamp'])) {
            $model->operateTimestamp = $map['OperateTimestamp'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
