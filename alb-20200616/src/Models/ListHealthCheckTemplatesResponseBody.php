<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody\healthCheckTemplates;
use AlibabaCloud\Tea\Model;

class ListHealthCheckTemplatesResponseBody extends Model
{
    /**
     * @description The health check templates.
     *
     * @var healthCheckTemplates[]
     */
    public $healthCheckTemplates;

    /**
     * @description The number of entries returned per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value of **NextToken** was returned in the previous query, specify the value to obtain the next set of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'healthCheckTemplates' => 'HealthCheckTemplates',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTemplates) {
            $res['HealthCheckTemplates'] = [];
            if (null !== $this->healthCheckTemplates && \is_array($this->healthCheckTemplates)) {
                $n = 0;
                foreach ($this->healthCheckTemplates as $item) {
                    $res['HealthCheckTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListHealthCheckTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplates'])) {
            if (!empty($map['HealthCheckTemplates'])) {
                $model->healthCheckTemplates = [];
                $n                           = 0;
                foreach ($map['HealthCheckTemplates'] as $item) {
                    $model->healthCheckTemplates[$n++] = null !== $item ? healthCheckTemplates::fromMap($item) : $item;
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
