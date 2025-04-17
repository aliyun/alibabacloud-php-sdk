<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SubmitPreprocessJobsRequest extends Model
{
    /**
     * @var string
     */
    public $preprocessType;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'preprocessType' => 'PreprocessType',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preprocessType) {
            $res['PreprocessType'] = $this->preprocessType;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['PreprocessType'])) {
            $model->preprocessType = $map['PreprocessType'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
