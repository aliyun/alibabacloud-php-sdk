<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListStateConfigurationsRequest extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $stateConfigurationIds;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'stateConfigurationIds' => 'StateConfigurationIds',
        'tags'                  => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return ListStateConfigurationsRequest
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
            $model->tags = $map['Tags'];
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
