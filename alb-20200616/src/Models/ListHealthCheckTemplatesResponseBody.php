<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody\healthCheckTemplates;

class ListHealthCheckTemplatesResponseBody extends Model
{
    /**
     * @var healthCheckTemplates[]
     */
    public $healthCheckTemplates;
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
        'healthCheckTemplates' => 'HealthCheckTemplates',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckTemplates)) {
            Model::validateArray($this->healthCheckTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckTemplates) {
            if (\is_array($this->healthCheckTemplates)) {
                $res['HealthCheckTemplates'] = [];
                $n1                          = 0;
                foreach ($this->healthCheckTemplates as $item1) {
                    $res['HealthCheckTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplates'])) {
            if (!empty($map['HealthCheckTemplates'])) {
                $model->healthCheckTemplates = [];
                $n1                          = 0;
                foreach ($map['HealthCheckTemplates'] as $item1) {
                    $model->healthCheckTemplates[$n1++] = healthCheckTemplates::fromMap($item1);
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
