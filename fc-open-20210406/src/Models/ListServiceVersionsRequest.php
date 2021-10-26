<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListServiceVersionsRequest extends Model
{
    /**
     * @description 排序方向
     *
     * @var string
     */
    public $direction;

    /**
     * @description 最多返回个数
     *
     * @var int
     */
    public $limit;

    /**
     * @description 下次查询token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 起始key
     *
     * @var string
     */
    public $startKey;
    protected $_name = [
        'direction' => 'direction',
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'startKey'  => 'startKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        return $model;
    }
}
