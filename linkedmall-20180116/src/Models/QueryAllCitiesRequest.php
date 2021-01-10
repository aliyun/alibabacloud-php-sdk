<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryAllCitiesRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var mixed[]
     */
    public $extJson;
    protected $_name = [
        'bizId'   => 'BizId',
        'extJson' => 'ExtJson',
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
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAllCitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }

        return $model;
    }
}
