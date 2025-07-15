<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class QueryRtcAsrTasksResponseBody extends Model
{
    /**
     * @description The result of the request. If success is returned, the request was successful. If an error message is returned, the request failed.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description The request ID.
     *
     * @example D8ADAB55-1BB8-5C01-8434-C45D353BB1FD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The HTTP status code. HTTP status code 2000 indicates that the request was successful. Other HTTP status codes indicate that the request failed.
     *
     * @example 2000
     *
     * @var int
     */
    public $retCode;

    /**
     * @description The results returned for the tasks.
     *
     * @var mixed[]
     */
    public $tasks;
    protected $_name = [
        'description' => 'Description',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
        'tasks' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = $this->tasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRtcAsrTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['Tasks'])) {
            $model->tasks = $map['Tasks'];
        }

        return $model;
    }
}
