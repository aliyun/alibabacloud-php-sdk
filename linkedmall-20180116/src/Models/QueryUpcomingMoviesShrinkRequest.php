<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryUpcomingMoviesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $cityCode;

    /**
     * @var string
     */
    public $extJsonShrink;
    protected $_name = [
        'bizId'         => 'BizId',
        'cityCode'      => 'CityCode',
        'extJsonShrink' => 'ExtJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->extJsonShrink) {
            $res['ExtJson'] = $this->extJsonShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUpcomingMoviesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJsonShrink = $map['ExtJson'];
        }

        return $model;
    }
}
