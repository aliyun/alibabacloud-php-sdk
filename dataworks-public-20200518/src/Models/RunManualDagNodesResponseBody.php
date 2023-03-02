<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunManualDagNodesResponseBody extends Model
{
    /**
     * @description The ID of the DAG for the manually triggered workflow. You can call an operation with this parameter as a request parameter to query the details and statuses of the nodes in this manually triggered workflow.
     *
     * @example 700000123123141
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The ID of the request.
     *
     * @example AASFDFSDFG-DFSDF-DFSDFD-SDFSDF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dagId'     => 'DagId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunManualDagNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
