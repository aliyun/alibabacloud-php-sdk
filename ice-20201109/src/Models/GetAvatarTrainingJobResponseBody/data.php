<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponseBody\data\avatarTrainingJob;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the digital human training job.
     *
     * @var avatarTrainingJob
     */
    public $avatarTrainingJob;
    protected $_name = [
        'avatarTrainingJob' => 'AvatarTrainingJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarTrainingJob) {
            $res['AvatarTrainingJob'] = null !== $this->avatarTrainingJob ? $this->avatarTrainingJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarTrainingJob'])) {
            $model->avatarTrainingJob = avatarTrainingJob::fromMap($map['AvatarTrainingJob']);
        }

        return $model;
    }
}
