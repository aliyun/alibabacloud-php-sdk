<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ApiTemplate extends Model
{
    /**
     * @description 接口名。
     *
     * @example CreateCluster
     *
     * @var string
     */
    public $apiName;

    /**
     * @description 模版接口参数。
     *
     * @var string
     */
    public $content;

    /**
     * @description 区域ID。
     *
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
     * @description 模板状态。
     *
     * @example READY
     *
     * @var string
     */
    public $status;

    /**
     * @description 模板ID。
     *
     * @example AT-Af***
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 模板ID。
     *
     * @example AT-Af***
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'apiName'         => 'ApiName',
        'content'         => 'Content',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'templateId'      => 'TemplateId',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApiTemplate
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
