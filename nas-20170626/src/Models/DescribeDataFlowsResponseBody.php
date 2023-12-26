<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo;
use AlibabaCloud\Tea\Model;

class DescribeDataFlowsResponseBody extends Model
{
    /**
     * @description The details about dataflows.
     *
     * @var dataFlowInfo
     */
    public $dataFlowInfo;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example TGlzdFJlc291cmNlU****mVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 2D69A58F-345C-4FDE-88E4-BF518948****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataFlowInfo' => 'DataFlowInfo',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFlowInfo) {
            $res['DataFlowInfo'] = null !== $this->dataFlowInfo ? $this->dataFlowInfo->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataFlowsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFlowInfo'])) {
            $model->dataFlowInfo = dataFlowInfo::fromMap($map['DataFlowInfo']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
