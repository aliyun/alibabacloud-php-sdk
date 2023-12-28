<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListHealthCheckTemplatesRequest extends Model
{
    /**
     * @description The IDs of health check templates.
     *
     * @var string[]
     */
    public $healthCheckTemplateIds;

    /**
     * @description The health check templates.
     *
     * @var string[]
     */
    public $healthCheckTemplateNames;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'healthCheckTemplateIds'   => 'HealthCheckTemplateIds',
        'healthCheckTemplateNames' => 'HealthCheckTemplateNames',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'tag'                      => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTemplateIds) {
            $res['HealthCheckTemplateIds'] = $this->healthCheckTemplateIds;
        }
        if (null !== $this->healthCheckTemplateNames) {
            $res['HealthCheckTemplateNames'] = $this->healthCheckTemplateNames;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHealthCheckTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplateIds'])) {
            if (!empty($map['HealthCheckTemplateIds'])) {
                $model->healthCheckTemplateIds = $map['HealthCheckTemplateIds'];
            }
        }
        if (isset($map['HealthCheckTemplateNames'])) {
            if (!empty($map['HealthCheckTemplateNames'])) {
                $model->healthCheckTemplateNames = $map['HealthCheckTemplateNames'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
