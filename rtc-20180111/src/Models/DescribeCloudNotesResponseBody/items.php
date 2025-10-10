<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $autoChaptersFilePath;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $customPromptFilePath;

    /**
     * @var string
     */
    public $meetingAssistanceFilePath;

    /**
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $serviceInspectionFilePath;

    /**
     * @var int
     */
    public $startTs;

    /**
     * @var string
     */
    public $summarizationFilePath;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $textPolishFilePath;

    /**
     * @var string
     */
    public $transcriptionFilePath;

    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'autoChaptersFilePath' => 'AutoChaptersFilePath',
        'bucket' => 'Bucket',
        'channelId' => 'ChannelId',
        'customPromptFilePath' => 'CustomPromptFilePath',
        'meetingAssistanceFilePath' => 'MeetingAssistanceFilePath',
        'region' => 'Region',
        'serviceInspectionFilePath' => 'ServiceInspectionFilePath',
        'startTs' => 'StartTs',
        'summarizationFilePath' => 'SummarizationFilePath',
        'taskId' => 'TaskId',
        'textPolishFilePath' => 'TextPolishFilePath',
        'transcriptionFilePath' => 'TranscriptionFilePath',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoChaptersFilePath) {
            $res['AutoChaptersFilePath'] = $this->autoChaptersFilePath;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->customPromptFilePath) {
            $res['CustomPromptFilePath'] = $this->customPromptFilePath;
        }

        if (null !== $this->meetingAssistanceFilePath) {
            $res['MeetingAssistanceFilePath'] = $this->meetingAssistanceFilePath;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->serviceInspectionFilePath) {
            $res['ServiceInspectionFilePath'] = $this->serviceInspectionFilePath;
        }

        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        if (null !== $this->summarizationFilePath) {
            $res['SummarizationFilePath'] = $this->summarizationFilePath;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->textPolishFilePath) {
            $res['TextPolishFilePath'] = $this->textPolishFilePath;
        }

        if (null !== $this->transcriptionFilePath) {
            $res['TranscriptionFilePath'] = $this->transcriptionFilePath;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AutoChaptersFilePath'])) {
            $model->autoChaptersFilePath = $map['AutoChaptersFilePath'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CustomPromptFilePath'])) {
            $model->customPromptFilePath = $map['CustomPromptFilePath'];
        }

        if (isset($map['MeetingAssistanceFilePath'])) {
            $model->meetingAssistanceFilePath = $map['MeetingAssistanceFilePath'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ServiceInspectionFilePath'])) {
            $model->serviceInspectionFilePath = $map['ServiceInspectionFilePath'];
        }

        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        if (isset($map['SummarizationFilePath'])) {
            $model->summarizationFilePath = $map['SummarizationFilePath'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TextPolishFilePath'])) {
            $model->textPolishFilePath = $map['TextPolishFilePath'];
        }

        if (isset($map['TranscriptionFilePath'])) {
            $model->transcriptionFilePath = $map['TranscriptionFilePath'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
