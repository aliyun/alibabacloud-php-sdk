<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009\Models;

use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListTaskInstancesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListTaskInstancesResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @example 123abc***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 9E3A7161-EB7B-172B-8D18-FFB06BA38***
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'data'      => 'data',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalSize' => 'totalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }

        return $model;
    }
}
