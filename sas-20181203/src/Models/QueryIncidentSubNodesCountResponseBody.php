<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentSubNodesCountResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CE500770-42D3-442E-9DDD-156E0F9F3B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The child nodes.
     *
     * @var int[]
     */
    public $subNodesCount;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'     => 'RequestId',
        'subNodesCount' => 'SubNodesCount',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subNodesCount) {
            $res['SubNodesCount'] = $this->subNodesCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentSubNodesCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubNodesCount'])) {
            $model->subNodesCount = $map['SubNodesCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
