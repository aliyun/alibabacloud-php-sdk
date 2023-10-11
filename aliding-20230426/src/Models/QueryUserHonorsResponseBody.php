<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody\honors;
use AlibabaCloud\Tea\Model;

class QueryUserHonorsResponseBody extends Model
{
    /**
     * @var honors[]
     */
    public $honors;

    /**
     * @example http-trigger-nodejs10.luoni-old.1431999136518149.cn-hangzhou.fc.devsapp.net
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'honors'    => 'honors',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honors) {
            $res['honors'] = [];
            if (null !== $this->honors && \is_array($this->honors)) {
                $n = 0;
                foreach ($this->honors as $item) {
                    $res['honors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserHonorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['honors'])) {
            if (!empty($map['honors'])) {
                $model->honors = [];
                $n             = 0;
                foreach ($map['honors'] as $item) {
                    $model->honors[$n++] = null !== $item ? honors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
