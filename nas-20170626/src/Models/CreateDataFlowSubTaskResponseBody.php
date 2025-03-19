<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateDataFlowSubTaskResponseBody extends Model
{
    /**
     * @description The ID of the data streaming task.
     *
     * @example subTaskId-370kyfmyknxcyzw****
     *
     * @var string
     */
    public $dataFlowSubTaskId;

    /**
     * @description The request ID.
     *
     * @example A70BEE5D-76D3-49FB-B58F-1F398211A5C3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataFlowSubTaskId' => 'DataFlowSubTaskId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFlowSubTaskId) {
            $res['DataFlowSubTaskId'] = $this->dataFlowSubTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataFlowSubTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFlowSubTaskId'])) {
            $model->dataFlowSubTaskId = $map['DataFlowSubTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
