<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateOpsItemShrinkRequest extends Model
{
    /**
     * @description The category.
     *
     * Valid values:
     *
     *   Availability
     *
     * <!-- -->
     *
     *   Performance
     *
     * <!-- -->
     *
     *   Security
     *
     * <!-- -->
     *
     *   Cost
     *
     * <!-- -->
     *
     *   Recovery
     *
     * This parameter is required.
     * @example Security
     *
     * @var string
     */
    public $category;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 123e56767-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The string to be deduplicated.
     *
     * @example ecs_instance_Sys
     *
     * @var string
     */
    public $dedupString;

    /**
     * @description The description of the operation.
     *
     * @example OpsItem
     *
     * @var string
     */
    public $description;

    /**
     * @description The priority. Valid values: 1 to 5. 1 indicates the highest priority.
     *
     * @example 4
     *
     * @var int
     */
    public $priority;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The Alibaba Cloud Resource Names (ARNs) of the associated resources.
     *
     * @example [\\"acs:oos:cn-hangzhou:1563457855438522:application/test-33333/applicationgroup/default-cn-hangzhou-1\\"]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The severity level.
     *
     * Valid values:
     *
     *   High
     *
     * <!-- -->
     *
     *   Low
     *
     * <!-- -->
     *
     *   Medium
     *
     * <!-- -->
     *
     *   Critical
     *
     * This parameter is required.
     * @example Medium
     *
     * @var string
     */
    public $severity;

    /**
     * @description The solutions.
     *
     * @example [{\\n \\\\"priority\\\\":3,\\n \\\\"type\\\\":\\\\"SingleAZEcs\\\\",\\n \\\\"url\\\\":\\\\"http://ecs.consle.aliyuncs.com\\\\",\\n \\\\"description\\\\":\\\\"Create Elastic Compute Service (ECS) instances in different zones and import them to an application group.\\\\"\\n}]
     *
     * @var string
     */
    public $solutions;

    /**
     * @description The source business.
     *
     * This parameter is required.
     * @example /aliyun/ecs
     *
     * @var string
     */
    public $source;

    /**
     * @description The tags.
     *
     * @example {
     * }
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The title of the O\\&M item.
     *
     * This parameter is required.
     * @example ECS reboot is scheduled
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'category'        => 'Category',
        'clientToken'     => 'ClientToken',
        'dedupString'     => 'DedupString',
        'description'     => 'Description',
        'priority'        => 'Priority',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resources'       => 'Resources',
        'severity'        => 'Severity',
        'solutions'       => 'Solutions',
        'source'          => 'Source',
        'tagsShrink'      => 'Tags',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedupString) {
            $res['DedupString'] = $this->dedupString;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->solutions) {
            $res['Solutions'] = $this->solutions;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOpsItemShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedupString'])) {
            $model->dedupString = $map['DedupString'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Solutions'])) {
            $model->solutions = $map['Solutions'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
