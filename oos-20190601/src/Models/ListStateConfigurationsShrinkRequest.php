<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListStateConfigurationsShrinkRequest extends Model
{
    /**
     * @description The maximum number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example AHJKH-AHKJHDJK-AKHDIOWJL
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the desired-state configuration.
     *
     * @example ["sc-asfgdhj12345"]
     *
     * @var string
     */
    public $stateConfigurationIds;

    /**
     * @description The tags to be added to the configuration.
     *
     * @example {"Key": "oos", "Value": "inventory"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The name of the template. The name must be 1 to 200 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The version number of the template. If you do not specify this parameter, the latest version of the template is used.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'stateConfigurationIds' => 'StateConfigurationIds',
        'tagsShrink'            => 'Tags',
        'templateName'          => 'TemplateName',
        'templateVersion'       => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->stateConfigurationIds) {
            $res['StateConfigurationIds'] = $this->stateConfigurationIds;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStateConfigurationsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StateConfigurationIds'])) {
            $model->stateConfigurationIds = $map['StateConfigurationIds'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
