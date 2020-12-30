<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoInfoRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $resultTypes;

    /**
     * @var string
     */
    public $additionType;
    protected $_name = [
        'videoId'      => 'VideoId',
        'resultTypes'  => 'ResultTypes',
        'additionType' => 'AdditionType',
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
        if (null !== $this->resultTypes) {
            $res['ResultTypes'] = $this->resultTypes;
        }
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['ResultTypes'])) {
            $model->resultTypes = $map['ResultTypes'];
        }
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }

        return $model;
    }
}
