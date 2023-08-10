<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListScheduledTasksResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0A6EB64B-B4C8-CF02-810F-E660812972FF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the scheduled tasks.
     *
     * For more information, see [ScheduledTask](~~173610~~).
     * @var mixed[][]
     */
    public $result;

    /**
     * @description The total number of the returned scheduled tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'requestId',
        'result'     => 'result',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScheduledTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = $map['result'];
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
