<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceOpLogResponseBody\operationLogs;
use AlibabaCloud\Tea\Model;

class GetDeviceOpLogResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 10
     *
     * @var int
     */
    public $nextToken;

    /**
     * @var operationLogs[]
     */
    public $operationLogs;

    /**
     * @example fdb2af01-bd56-4034-812b-f257f73b4690
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'operationLogs' => 'OperationLogs',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->operationLogs) {
            $res['OperationLogs'] = [];
            if (null !== $this->operationLogs && \is_array($this->operationLogs)) {
                $n = 0;
                foreach ($this->operationLogs as $item) {
                    $res['OperationLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceOpLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OperationLogs'])) {
            if (!empty($map['OperationLogs'])) {
                $model->operationLogs = [];
                $n                    = 0;
                foreach ($map['OperationLogs'] as $item) {
                    $model->operationLogs[$n++] = null !== $item ? operationLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
