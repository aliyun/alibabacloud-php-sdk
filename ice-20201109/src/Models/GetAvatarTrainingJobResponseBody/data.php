<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponseBody\data\avatarTrainingJob;

class data extends Model
{
    /**
     * @var avatarTrainingJob
     */
    public $avatarTrainingJob;
    protected $_name = [
        'avatarTrainingJob' => 'AvatarTrainingJob',
    ];

    public function validate()
    {
        if (null !== $this->avatarTrainingJob) {
            $this->avatarTrainingJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarTrainingJob) {
            $res['AvatarTrainingJob'] = null !== $this->avatarTrainingJob ? $this->avatarTrainingJob->toArray($noStream) : $this->avatarTrainingJob;
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
        if (isset($map['AvatarTrainingJob'])) {
            $model->avatarTrainingJob = avatarTrainingJob::fromMap($map['AvatarTrainingJob']);
        }

        return $model;
    }
}
