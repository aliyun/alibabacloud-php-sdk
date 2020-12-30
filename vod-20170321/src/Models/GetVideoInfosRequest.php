<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoInfosRequest extends Model
{
    /**
     * @var string
     */
    public $videoIds;

    /**
     * @var string
     */
    public $additionType;
    protected $_name = [
        'videoIds'     => 'VideoIds',
        'additionType' => 'AdditionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }

        return $model;
    }
}
