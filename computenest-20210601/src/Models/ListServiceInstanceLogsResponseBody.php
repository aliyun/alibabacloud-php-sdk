<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponseBody\serviceInstancesLogs;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var serviceInstancesLogs[]
     */
    public $serviceInstancesLogs;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'maxResults'           => 'MaxResults',
        'serviceInstancesLogs' => 'ServiceInstancesLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->serviceInstancesLogs) {
            $res['ServiceInstancesLogs'] = [];
            if (null !== $this->serviceInstancesLogs && \is_array($this->serviceInstancesLogs)) {
                $n = 0;
                foreach ($this->serviceInstancesLogs as $item) {
                    $res['ServiceInstancesLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstanceLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ServiceInstancesLogs'])) {
            if (!empty($map['ServiceInstancesLogs'])) {
                $model->serviceInstancesLogs = [];
                $n                           = 0;
                foreach ($map['ServiceInstancesLogs'] as $item) {
                    $model->serviceInstancesLogs[$n++] = null !== $item ? serviceInstancesLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
