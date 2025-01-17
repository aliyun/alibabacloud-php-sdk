<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponseBody\data\customizedVoiceJob;

class data extends Model
{
    /**
     * @var customizedVoiceJob
     */
    public $customizedVoiceJob;
    protected $_name = [
        'customizedVoiceJob' => 'CustomizedVoiceJob',
    ];

    public function validate()
    {
        if (null !== $this->customizedVoiceJob) {
            $this->customizedVoiceJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customizedVoiceJob) {
            $res['CustomizedVoiceJob'] = null !== $this->customizedVoiceJob ? $this->customizedVoiceJob->toArray($noStream) : $this->customizedVoiceJob;
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
        if (isset($map['CustomizedVoiceJob'])) {
            $model->customizedVoiceJob = customizedVoiceJob::fromMap($map['CustomizedVoiceJob']);
        }

        return $model;
    }
}
