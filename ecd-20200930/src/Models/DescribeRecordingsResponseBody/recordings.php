<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsResponseBody;

use AlibabaCloud\Tea\Model;

class recordings extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $recordingSize;

    /**
     * @var string
     */
    public $recordingType;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId'     => 'DesktopId',
        'endTime'       => 'EndTime',
        'endUserIds'    => 'EndUserIds',
        'filePath'      => 'FilePath',
        'recordingSize' => 'RecordingSize',
        'recordingType' => 'RecordingType',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->recordingSize) {
            $res['RecordingSize'] = $this->recordingSize;
        }
        if (null !== $this->recordingType) {
            $res['RecordingType'] = $this->recordingType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['RecordingSize'])) {
            $model->recordingSize = $map['RecordingSize'];
        }
        if (isset($map['RecordingType'])) {
            $model->recordingType = $map['RecordingType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
