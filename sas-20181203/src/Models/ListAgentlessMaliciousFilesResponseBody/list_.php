<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody\list_\details;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody\list_\notes;

class list_ extends Model
{
    /**
     * @var details[]
     */
    public $details;
    /**
     * @var string
     */
    public $downloadUrl;
    /**
     * @var int
     */
    public $filePath;
    /**
     * @var int
     */
    public $firstScanTimestamp;
    /**
     * @var string
     */
    public $highLight;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var int
     */
    public $latestScanTimestamp;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $maliciousMd5;
    /**
     * @var string
     */
    public $maliciousName;
    /**
     * @var string
     */
    public $maliciousType;
    /**
     * @var notes[]
     */
    public $notes;
    /**
     * @var string
     */
    public $operateResult;
    /**
     * @var string
     */
    public $operateTimestamp;
    /**
     * @var string
     */
    public $partition;
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetName;
    /**
     * @var string
     */
    public $targetType;
    /**
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
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        if (\is_array($this->notes)) {
            Model::validateArray($this->notes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1             = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->notes)) {
                $res['Notes'] = [];
                $n1           = 0;
                foreach ($this->notes as $item1) {
                    $res['Notes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1             = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1++] = details::fromMap($item1);
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
                $n1           = 0;
                foreach ($map['Notes'] as $item1) {
                    $model->notes[$n1++] = notes::fromMap($item1);
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
