<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitPreprocessJobsRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $preprocessType;
    protected $_name = [
        'videoId'        => 'VideoId',
        'preprocessType' => 'PreprocessType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->preprocessType) {
            $res['PreprocessType'] = $this->preprocessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitPreprocessJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['PreprocessType'])) {
            $model->preprocessType = $map['PreprocessType'];
        }

        return $model;
    }
}
