<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example cloudNote/ksvxxppi/88_12/autoChapters_1724914365173.json
     *
     * @var string
     */
    public $autoChaptersFilePath;

    /**
     * @example sample-bucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @example testchannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @example cloudNote/ksvxxppi/88_12/customPrompt_1724914365173.json
     *
     * @var string
     */
    public $customPromptFilePath;

    /**
     * @example cloudNote/ksvxxppi/88_12/meetingAssistance_1724914365173.json
     *
     * @var string
     */
    public $meetingAssistanceFilePath;

    /**
     * @example 1
     *
     * @var int
     */
    public $region;

    /**
     * @example cloudNote/ksvxxppi/88_12/serviceInspection_1724914365173.json
     *
     * @var string
     */
    public $serviceInspectionFilePath;

    /**
     * @example 1731939816837
     *
     * @var int
     */
    public $startTs;

    /**
     * @example cloudNote/ksvxxppi/88_12/summarization_1724914365173.json
     *
     * @var string
     */
    public $summarizationFilePath;

    /**
     * @example test001
     *
     * @var string
     */
    public $taskId;

    /**
     * @example cloudNote/ksvxxppi/88_12/textPolish_1724914365173.json
     *
     * @var string
     */
    public $textPolishFilePath;

    /**
     * @example cloudNote/ksvxxppi/88_12/transcription_1724914365173.json
     *
     * @var string
     */
    public $transcriptionFilePath;

    /**
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return items
     */
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
