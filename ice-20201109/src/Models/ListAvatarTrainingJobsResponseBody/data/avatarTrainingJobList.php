<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponseBody\data;

use AlibabaCloud\Tea\Model;

class avatarTrainingJobList extends Model
{
    /**
     * @description The description of the digital human.
     *
     * @var string
     */
    public $avatarDescription;

    /**
     * @description The ID of the digital human.
     *
     * @example Avatar-XXX
     *
     * @var string
     */
    public $avatarId;

    /**
     * @description The name of the digital human.
     *
     * @var string
     */
    public $avatarName;

    /**
     * @description The type of the digital human.
     *
     * @example 2DAvatar
     *
     * @var string
     */
    public $avatarType;

    /**
     * @description *   The time when the job was created.
     *   The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description *   The time when the first training was initiated.
     *   The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $firstTrainingTime;

    /**
     * @description The ID of the digital human training job.
     *
     * @example *****aded114489ea02e0addf93*****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description *   The time when the last training was initiated.
     *   The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $lastTrainingTime;

    /**
     * @description The status description.
     *
     * @var string
     */
    public $message;

    /**
     * @description The media asset ID of the portrait image.
     *
     * @example *****aded114489ea02e0addf93*****
     *
     * @var string
     */
    public $portrait;

    /**
     * @description The state of the digital human training job.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'avatarDescription' => 'AvatarDescription',
        'avatarId'          => 'AvatarId',
        'avatarName'        => 'AvatarName',
        'avatarType'        => 'AvatarType',
        'createTime'        => 'CreateTime',
        'firstTrainingTime' => 'FirstTrainingTime',
        'jobId'             => 'JobId',
        'lastTrainingTime'  => 'LastTrainingTime',
        'message'           => 'Message',
        'portrait'          => 'Portrait',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarDescription) {
            $res['AvatarDescription'] = $this->avatarDescription;
        }
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }
        if (null !== $this->avatarName) {
            $res['AvatarName'] = $this->avatarName;
        }
        if (null !== $this->avatarType) {
            $res['AvatarType'] = $this->avatarType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->firstTrainingTime) {
            $res['FirstTrainingTime'] = $this->firstTrainingTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->lastTrainingTime) {
            $res['LastTrainingTime'] = $this->lastTrainingTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->portrait) {
            $res['Portrait'] = $this->portrait;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avatarTrainingJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarDescription'])) {
            $model->avatarDescription = $map['AvatarDescription'];
        }
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }
        if (isset($map['AvatarName'])) {
            $model->avatarName = $map['AvatarName'];
        }
        if (isset($map['AvatarType'])) {
            $model->avatarType = $map['AvatarType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FirstTrainingTime'])) {
            $model->firstTrainingTime = $map['FirstTrainingTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['LastTrainingTime'])) {
            $model->lastTrainingTime = $map['LastTrainingTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Portrait'])) {
            $model->portrait = $map['Portrait'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
