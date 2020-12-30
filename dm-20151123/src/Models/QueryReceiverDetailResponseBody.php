<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryReceiverDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataSchema;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $nextStart;
    protected $_name = [
        'dataSchema' => 'DataSchema',
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'data'       => 'data',
        'nextStart'  => 'NextStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSchema) {
            $res['DataSchema'] = $this->dataSchema;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->nextStart) {
            $res['NextStart'] = $this->nextStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryReceiverDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSchema'])) {
            $model->dataSchema = $map['DataSchema'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['NextStart'])) {
            $model->nextStart = $map['NextStart'];
        }

        return $model;
    }
}
