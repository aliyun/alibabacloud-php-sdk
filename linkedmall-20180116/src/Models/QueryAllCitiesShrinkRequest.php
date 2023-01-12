<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryAllCitiesShrinkRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJsonShrink;
    protected $_name = [
        'bizId'         => 'BizId',
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
        if (null !== $this->extJsonShrink) {
            $res['ExtJson'] = $this->extJsonShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAllCitiesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJsonShrink = $map['ExtJson'];
        }

        return $model;
    }
}
