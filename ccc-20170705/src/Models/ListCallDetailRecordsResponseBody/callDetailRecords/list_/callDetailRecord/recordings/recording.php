<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\recordings;

use AlibabaCloud\Tea\Model;

class recording extends Model
{
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
    public $agentId;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var int
     */
    public $duration;

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
    public $qualityCheckTid;
    protected $_name = [
        'startTime'          => 'StartTime',
        'contactId'          => 'ContactId',
        'qualityCheckTaskId' => 'QualityCheckTaskId',
        'agentId'            => 'AgentId',
        'fileDescription'    => 'FileDescription',
        'duration'           => 'Duration',
        'agentName'          => 'AgentName',
        'fileName'           => 'FileName',
        'qualityCheckTid'    => 'QualityCheckTid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->qualityCheckTaskId) {
            $res['QualityCheckTaskId'] = $this->qualityCheckTaskId;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->qualityCheckTid) {
            $res['QualityCheckTid'] = $this->qualityCheckTid;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['QualityCheckTaskId'])) {
            $model->qualityCheckTaskId = $map['QualityCheckTaskId'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['QualityCheckTid'])) {
            $model->qualityCheckTid = $map['QualityCheckTid'];
        }

        return $model;
    }
}
