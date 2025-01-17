<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponseBody\data;

use AlibabaCloud\Dara\Model;

class customizedVoiceJob extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $gender;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $scenario;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $voiceDesc;
    /**
     * @var string
     */
    public $voiceId;
    /**
     * @var string
     */
    public $voiceName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'gender'     => 'Gender',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
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
