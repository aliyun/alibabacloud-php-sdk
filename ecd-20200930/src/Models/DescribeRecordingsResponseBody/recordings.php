<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsResponseBody;

use AlibabaCloud\Tea\Model;

class recordings extends Model
{
    /**
     * @example ecd-10v0vuvm616sk****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @example DemoComputer
     *
     * @var string
     */
    public $desktopName;

    /**
     * @example 2023-04-10T07:26:06Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @example pg-4w5nk44zo5yl129dd/1mk78dugw344.mp4
     *
     * @var string
     */
    public $filePath;

    /**
     * @example pg-6dn811rzrwh9ws4z6
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @example 1742845
     *
     * @var int
     */
    public $recordingSize;

    /**
     * @example alltime
     *
     * @var string
     */
    public $recordingType;

    /**
     * @var string
     */
    public $signedUrl;

    /**
     * @example 2023-04-10T07:26:06Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId'     => 'DesktopId',
        'desktopName'   => 'DesktopName',
        'endTime'       => 'EndTime',
        'endUserIds'    => 'EndUserIds',
        'filePath'      => 'FilePath',
        'policyGroupId' => 'PolicyGroupId',
        'recordingSize' => 'RecordingSize',
        'recordingType' => 'RecordingType',
        'signedUrl'     => 'SignedUrl',
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
