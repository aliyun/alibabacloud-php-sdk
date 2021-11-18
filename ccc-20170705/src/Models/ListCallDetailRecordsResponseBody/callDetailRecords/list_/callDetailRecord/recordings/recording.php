<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\recordings;

use AlibabaCloud\Tea\Model;

class recording extends Model
{
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
    public $contactId;

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
    public $fileName;

    /**
     * @var string
     */
    public $qualityCheckTaskId;

    /**
     * @var string
     */
    public $qualityCheckTid;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentId'            => 'AgentId',
        'agentName'          => 'AgentName',
        'contactId'          => 'ContactId',
        'duration'           => 'Duration',
        'fileDescription'    => 'FileDescription',
        'fileName'           => 'FileName',
        'qualityCheckTaskId' => 'QualityCheckTaskId',
        'qualityCheckTid'    => 'QualityCheckTid',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->qualityCheckTaskId) {
            $res['QualityCheckTaskId'] = $this->qualityCheckTaskId;
        }
        if (null !== $this->qualityCheckTid) {
            $res['QualityCheckTid'] = $this->qualityCheckTid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['QualityCheckTaskId'])) {
            $model->qualityCheckTaskId = $map['QualityCheckTaskId'];
        }
        if (isset($map['QualityCheckTid'])) {
            $model->qualityCheckTid = $map['QualityCheckTid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
