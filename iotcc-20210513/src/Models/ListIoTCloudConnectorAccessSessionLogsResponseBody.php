<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAccessSessionLogsResponseBody\accessSessionLogs;
use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorAccessSessionLogsResponseBody extends Model
{
    /**
     * @var accessSessionLogs[]
     */
    public $accessSessionLogs;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessSessionLogs' => 'AccessSessionLogs',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessSessionLogs) {
            $res['AccessSessionLogs'] = [];
            if (null !== $this->accessSessionLogs && \is_array($this->accessSessionLogs)) {
                $n = 0;
                foreach ($this->accessSessionLogs as $item) {
                    $res['AccessSessionLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListIoTCloudConnectorAccessSessionLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessSessionLogs'])) {
            if (!empty($map['AccessSessionLogs'])) {
                $model->accessSessionLogs = [];
                $n                        = 0;
                foreach ($map['AccessSessionLogs'] as $item) {
                    $model->accessSessionLogs[$n++] = null !== $item ? accessSessionLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
