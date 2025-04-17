<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponseBody\serviceInstancesLogs;

class ListServiceInstanceLogsResponseBody extends Model
{
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
     * @var serviceInstancesLogs[]
     */
    public $serviceInstancesLogs;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'serviceInstancesLogs' => 'ServiceInstancesLogs',
    ];

    public function validate()
    {
        if (\is_array($this->serviceInstancesLogs)) {
            Model::validateArray($this->serviceInstancesLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceInstancesLogs) {
            if (\is_array($this->serviceInstancesLogs)) {
                $res['ServiceInstancesLogs'] = [];
                $n1 = 0;
                foreach ($this->serviceInstancesLogs as $item1) {
                    $res['ServiceInstancesLogs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceInstancesLogs'])) {
            if (!empty($map['ServiceInstancesLogs'])) {
                $model->serviceInstancesLogs = [];
                $n1 = 0;
                foreach ($map['ServiceInstancesLogs'] as $item1) {
                    $model->serviceInstancesLogs[$n1++] = serviceInstancesLogs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
