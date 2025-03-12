<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentlessSensitiveFileByKeyResponseBody;

use AlibabaCloud\Tea\Model;

class sensitiveFileList extends Model
{
    /**
     * @description The path to the sensitive file.
     *
     * @example /usr/lib/abc.txt
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The timestamp when the first scan was performed. Unit: milliseconds.
     *
     * @example 1663321552000
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @description The ID of the alert for the sensitive file.
     *
     * @example 423505573
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance name of the asset.
     *
     * @example test-server
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the asset.
     *
     * @example 95.214.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset.
     *
     * @example 10.68.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The timestamp when the last scan was performed. Unit: milliseconds.
     *
     * @example 1663691592000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The MD5 hash value of the sensitive file.
     *
     * @example b484b0dff093f358897486b58266****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The content of the sensitive file.
     *
     * @example mysql -u -p****
     *
     * @var string
     */
    public $prompt;

    /**
     * @description The risk level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The type of the sensitive file.
     *
     * @example pem
     *
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @description The status of the sensitive file. Valid values:
     *
     *   **0**: unhandled.
     *   **1**: ignored.
     *   **2**: false positive.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the asset.
     *
     * @example SAS_Agentless_171869952****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The UUID of the asset.
     *
     * @example 73e6a851-e63b-49ef-9d7a-5542d765****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'filePath'         => 'FilePath',
        'firstScanTime'    => 'FirstScanTime',
        'id'               => 'Id',
        'instanceName'     => 'InstanceName',
        'internetIp'       => 'InternetIp',
        'intranetIp'       => 'IntranetIp',
        'lastScanTime'     => 'LastScanTime',
        'md5'              => 'Md5',
        'prompt'           => 'Prompt',
        'riskLevel'        => 'RiskLevel',
        'sensitiveFileKey' => 'SensitiveFileKey',
        'status'           => 'Status',
        'targetName'       => 'TargetName',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
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
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveFileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
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
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
