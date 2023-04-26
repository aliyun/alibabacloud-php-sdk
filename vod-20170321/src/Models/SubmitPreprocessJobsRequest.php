<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitPreprocessJobsRequest extends Model
{
    /**
     * @example LivePreprocess
     *
     * @var string
     */
    public $preprocessType;

    /**
     * @description The operation that you want to perform. Set the value to **SubmitPreprocessJobs**.
     *
     * @example d3e680e618708efbf2cae7cc9312****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'preprocessType' => 'PreprocessType',
        'videoId'        => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitPreprocessJobsRequest
     */
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
