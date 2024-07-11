<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateOpsItemShrinkRequest extends Model
{
    /**
     * @description The category.
     *
     * @example Security
     *
     * @var string
     */
    public $category;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example DASKJJLKADS-AHKLJHJSAKL-AJK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The string to be deduplicated.
     *
     * @example ecs_instance_SystemMaintenance.Reboot
     *
     * @var string
     */
    public $dedupString;

    /**
     * @description The description of the O\\&M item.
     *
     * @example test-update
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the O\\&M item.
     *
     * @example oi-e2264dcf040c472598e9
     *
     * @var string
     */
    public $opsItemId;

    /**
     * @description The priority.
     *
     * @example 2
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
     * @description The Alibaba Resource Names (ARNs) of the associated resources.
     *
     * @example [\\"arn:acs:ecs:cn-heyuan:1139354755361920:instance/i-f8z928h7aqotd3o65032\\"]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The severity level.
     *
     * @example Medium
     *
     * @var string
     */
    public $severity;

    /**
     * @description The solutions.
     *
     * @example [{\\n \\\\"priority\\\\":3,\\n \\\\"type\\\\":\\\\"url\\\\",\\n \\\\"url\\\\":\\\\"https://example.com\\\\",\\n \\\\"description\\\\":\\\\"Specify a cross-zone high availability cluster. \\\\"\\n}]
     *
     * @var string
     */
    public $solutions;

    /**
     * @description The source business.
     *
     * @example /aliyun/ecs
     *
     * @var string
     */
    public $source;

    /**
     * @description The status.
     *
     * @example Open
     *
     * @var string
     */
    public $status;

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
     * @example Test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'category'        => 'Category',
        'clientToken'     => 'ClientToken',
        'dedupString'     => 'DedupString',
        'description'     => 'Description',
        'opsItemId'       => 'OpsItemId',
        'priority'        => 'Priority',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resources'       => 'Resources',
        'severity'        => 'Severity',
        'solutions'       => 'Solutions',
        'source'          => 'Source',
        'status'          => 'Status',
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
        if (null !== $this->opsItemId) {
            $res['OpsItemId'] = $this->opsItemId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return UpdateOpsItemShrinkRequest
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
        if (isset($map['OpsItemId'])) {
            $model->opsItemId = $map['OpsItemId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
