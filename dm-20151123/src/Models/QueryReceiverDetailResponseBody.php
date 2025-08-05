<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailResponseBody\data;

class QueryReceiverDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataSchema;

    /**
     * @var string
     */
    public $nextStart;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'dataSchema' => 'DataSchema',
        'nextStart' => 'NextStart',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'data' => 'data',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSchema) {
            $res['DataSchema'] = $this->dataSchema;
        }

        if (null !== $this->nextStart) {
            $res['NextStart'] = $this->nextStart;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSchema'])) {
            $model->dataSchema = $map['DataSchema'];
        }

        if (isset($map['NextStart'])) {
            $model->nextStart = $map['NextStart'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
