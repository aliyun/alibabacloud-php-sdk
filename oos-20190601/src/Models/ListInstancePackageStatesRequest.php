<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListInstancePackageStatesRequest extends Model
{
    /**
     * @description ECS instance ID
     *
     * This parameter is required.
     *
     * @example i-bp1cpoxxxwxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Page size.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Pagination token.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctzxxxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description List of extension names
     *
     * @example ["template1","template2"]
     *
     * @var string
     */
    public $templateNames;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'templateNames' => 'TemplateNames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateNames) {
            $res['TemplateNames'] = $this->templateNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancePackageStatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateNames'])) {
            $model->templateNames = $map['TemplateNames'];
        }

        return $model;
    }
}
