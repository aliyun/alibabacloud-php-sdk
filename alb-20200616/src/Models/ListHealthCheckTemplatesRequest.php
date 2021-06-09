<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListHealthCheckTemplatesRequest extends Model
{
    /**
     * @description 分页查询标识
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 查询数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 健康检查模板ID列表
     *
     * @var string[]
     */
    public $healthCheckTemplateIds;

    /**
     * @description 健康检查模板名称列表
     *
     * @var string[]
     */
    public $healthCheckTemplateNames;
    protected $_name = [
        'nextToken'                => 'NextToken',
        'maxResults'               => 'MaxResults',
        'healthCheckTemplateIds'   => 'HealthCheckTemplateIds',
        'healthCheckTemplateNames' => 'HealthCheckTemplateNames',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->healthCheckTemplateIds) {
            $res['HealthCheckTemplateIds'] = $this->healthCheckTemplateIds;
        }
        if (null !== $this->healthCheckTemplateNames) {
            $res['HealthCheckTemplateNames'] = $this->healthCheckTemplateNames;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
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

        return $model;
    }
}
