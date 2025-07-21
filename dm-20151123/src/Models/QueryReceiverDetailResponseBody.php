<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryReceiverDetailResponseBody extends Model
{
    /**
     * @description Field name for the Data of recipients
     *
     * @example UserName,NickName,Gender,Birthday,Mobile
     *
     * @var string
     */
    public $dataSchema;

    /**
     * @description Used for pagination. If there are more results, set this returned value to the NextStart in the next request.
     *
     * @example 90f0243616#40test@example.com
     *
     * @var string
     */
    public $nextStart;

    /**
     * @description Request ID
     *
     * @example 10A1AD70-E48E-476D-98D9-39BD92193837
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total count (deprecated field, kept for historical compatibility)
     *
     * @example 361
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Detailed information
     *
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

    public function validate() {}

    public function toMap()
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
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
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
