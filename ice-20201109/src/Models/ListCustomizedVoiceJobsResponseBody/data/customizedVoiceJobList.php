<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponseBody\data;

use AlibabaCloud\Tea\Model;

class customizedVoiceJobList extends Model
{
    /**
     * @description *   The time when the job was created.
     *   The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-04-01T06:23:59Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The gender. Valid values:
     *
     *   female
     *   male
     *
     * @example female
     *
     * @var string
     */
    public $gender;

    /**
     * @description The time when the job was created.
     *
     * @example 2022-06-27T02:42:28Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The ID of the human voice cloning job.
     *
     * @example 2245ab99a7fd4116a4fd3f499b7a56c5
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The returned message.
     *
     * @var string
     */
    public $message;

    /**
     * @description The scenario. Valid values:
     *
     *   story
     *   interaction
     *   navigation
     *
     * @example story
     *
     * @var string
     */
    public $scenario;

    /**
     * @description The job state. Valid values:
     *
     *   Initialization
     *   AudioDetecting
     *   PreTraining
     *   Training
     *   Success
     *   Fail
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description *   The voice type. Valid values:
     *
     *   Basic
     *   Standard
     *
     * @example Standard
     *
     * @var string
     */
    public $type;

    /**
     * @description The voice description.
     *
     *   The description can be up to 256 characters in length.
     *
     * @var string
     */
    public $voiceDesc;

    /**
     * @description The voice ID.
     *
     * @example xiaozhuan
     *
     * @var string
     */
    public $voiceId;

    /**
     * @description The voice name.
     *
     *   The name can be up to 32 characters in length.
     *
     * @var string
     */
    public $voiceName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'gender'     => 'Gender',
        'gmtCreate'  => 'GmtCreate',
        'jobId'      => 'JobId',
        'message'    => 'Message',
        'scenario'   => 'Scenario',
        'status'     => 'Status',
        'type'       => 'Type',
        'voiceDesc'  => 'VoiceDesc',
        'voiceId'    => 'VoiceId',
        'voiceName'  => 'VoiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->voiceDesc) {
            $res['VoiceDesc'] = $this->voiceDesc;
        }
        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }
        if (null !== $this->voiceName) {
            $res['VoiceName'] = $this->voiceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customizedVoiceJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VoiceDesc'])) {
            $model->voiceDesc = $map['VoiceDesc'];
        }
        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }
        if (isset($map['VoiceName'])) {
            $model->voiceName = $map['VoiceName'];
        }

        return $model;
    }
}
