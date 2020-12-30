<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecordingsByContactIdResponseBody\recordings;

use AlibabaCloud\Tea\Model;

class recording extends Model
{
    /**
     * @var string
     */
    public $contactType;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $qualityCheckTid;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $qualityCheckTaskId;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var string
     */
    public $channel;
    protected $_name = [
        'contactType'        => 'ContactType',
        'agentId'            => 'AgentId',
        'agentName'          => 'AgentName',
        'fileName'           => 'FileName',
        'instanceId'         => 'InstanceId',
        'calledNumber'       => 'CalledNumber',
        'qualityCheckTid'    => 'QualityCheckTid',
        'filePath'           => 'FilePath',
        'startTime'          => 'StartTime',
        'contactId'          => 'ContactId',
        'qualityCheckTaskId' => 'QualityCheckTaskId',
        'callingNumber'      => 'CallingNumber',
        'duration'           => 'Duration',
        'fileDescription'    => 'FileDescription',
        'channel'            => 'Channel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->qualityCheckTid) {
            $res['QualityCheckTid'] = $this->qualityCheckTid;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->qualityCheckTaskId) {
            $res['QualityCheckTaskId'] = $this->qualityCheckTaskId;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recording
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['QualityCheckTid'])) {
            $model->qualityCheckTid = $map['QualityCheckTid'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['QualityCheckTaskId'])) {
            $model->qualityCheckTaskId = $map['QualityCheckTaskId'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        return $model;
    }
}
