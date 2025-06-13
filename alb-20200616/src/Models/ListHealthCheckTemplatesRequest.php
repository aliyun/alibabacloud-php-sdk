<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesRequest\tag;

class ListHealthCheckTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $healthCheckTemplateIds;

    /**
     * @var string[]
     */
    public $healthCheckTemplateNames;

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
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'healthCheckTemplateIds' => 'HealthCheckTemplateIds',
        'healthCheckTemplateNames' => 'HealthCheckTemplateNames',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckTemplateIds)) {
            Model::validateArray($this->healthCheckTemplateIds);
        }
        if (\is_array($this->healthCheckTemplateNames)) {
            Model::validateArray($this->healthCheckTemplateNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckTemplateIds) {
            if (\is_array($this->healthCheckTemplateIds)) {
                $res['HealthCheckTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->healthCheckTemplateIds as $item1) {
                    $res['HealthCheckTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthCheckTemplateNames) {
            if (\is_array($this->healthCheckTemplateNames)) {
                $res['HealthCheckTemplateNames'] = [];
                $n1 = 0;
                foreach ($this->healthCheckTemplateNames as $item1) {
                    $res['HealthCheckTemplateNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['HealthCheckTemplateIds'])) {
            if (!empty($map['HealthCheckTemplateIds'])) {
                $model->healthCheckTemplateIds = [];
                $n1 = 0;
                foreach ($map['HealthCheckTemplateIds'] as $item1) {
                    $model->healthCheckTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthCheckTemplateNames'])) {
            if (!empty($map['HealthCheckTemplateNames'])) {
                $model->healthCheckTemplateNames = [];
                $n1 = 0;
                foreach ($map['HealthCheckTemplateNames'] as $item1) {
                    $model->healthCheckTemplateNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
