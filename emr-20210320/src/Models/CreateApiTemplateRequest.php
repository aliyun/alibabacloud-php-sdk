<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CreateApiTemplateRequest extends Model
{
    /**
     * @description The name of the API operation. You can create only a cluster API operation template. Set the value to CreateCluster.
     *
     * This parameter is required.
     * @example CreateCluster
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The content of the cluster API operation template. Set the value to JSON strings of the request parameters of the [CreateCluster](https://help.aliyun.com/zh/emr/emr-on-ecs/developer-reference/api-emr-2021-03-20-createcluster) API operation for creating a cluster.
     *
     * This parameter is required.
     * @example content
     *
     * @var string
     */
    public $content;

    /**
     * @description 地域ID。
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 资源组ID。
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 集群模板名字。
     *
     * This parameter is required.
     * @example DATALAKE模板
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'apiName'         => 'ApiName',
        'content'         => 'Content',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'templateName'    => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
