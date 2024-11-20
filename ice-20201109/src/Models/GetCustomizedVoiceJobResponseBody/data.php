<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponseBody\data\customizedVoiceJob;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the human voice cloning job.
     *
     * @var customizedVoiceJob
     */
    public $customizedVoiceJob;
    protected $_name = [
        'customizedVoiceJob' => 'CustomizedVoiceJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedVoiceJob) {
            $res['CustomizedVoiceJob'] = null !== $this->customizedVoiceJob ? $this->customizedVoiceJob->toMap() : null;
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
        if (isset($map['CustomizedVoiceJob'])) {
            $model->customizedVoiceJob = customizedVoiceJob::fromMap($map['CustomizedVoiceJob']);
        }

        return $model;
    }
}
