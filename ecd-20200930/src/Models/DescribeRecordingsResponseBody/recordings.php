<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsResponseBody;

use AlibabaCloud\Tea\Model;

class recordings extends Model
{
    /**
     * @description The cloud computer ID.
     *
     * @example ecd-10v0vuvm616sk****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The cloud computer name.
     *
     * @example DemoComputer
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The end time of the recording.
     *
     * @example 2023-04-10T07:26:06Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The end user IDs.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The file path.
     *
     * @example pg-4w5nk44zo5yl129dd/1mk78dugw344.mp4
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The policy ID.
     *
     * @example pg-6dn811rzrwh9ws4z6
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The size of the screen recording file. Unit: bytes.
     *
     * @example 1742845
     *
     * @var int
     */
    public $recordingSize;

    /**
     * @description The type of event that triggers the recording.
     *
     * Valid values:
     *
     *   byaction_cmd_ft: triggered by copy-paste or file transfer events.
     *   period: triggered at scheduled intervals.
     *   session: triggered by session lifecycle monitoring.
     *   byaction_commands: triggered by copy-paste only.
     *   alltime: continuous recording.
     *   byaction_file_transfer: triggered by file transfer only.
     *
     * @example alltime
     *
     * @var string
     */
    public $recordingType;

    /**
     * @description The download URL of the screen recording file.
     *
     * @var string
     */
    public $signedUrl;

    /**
     * @description The start time of the recording.
     *
     * @example 2023-04-10T07:26:06Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endTime' => 'EndTime',
        'endUserIds' => 'EndUserIds',
        'filePath' => 'FilePath',
        'policyGroupId' => 'PolicyGroupId',
        'recordingSize' => 'RecordingSize',
        'recordingType' => 'RecordingType',
        'signedUrl' => 'SignedUrl',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
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
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->recordingSize) {
            $res['RecordingSize'] = $this->recordingSize;
        }
        if (null !== $this->recordingType) {
            $res['RecordingType'] = $this->recordingType;
        }
        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
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
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
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
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RecordingSize'])) {
            $model->recordingSize = $map['RecordingSize'];
        }
        if (isset($map['RecordingType'])) {
            $model->recordingType = $map['RecordingType'];
        }
        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
