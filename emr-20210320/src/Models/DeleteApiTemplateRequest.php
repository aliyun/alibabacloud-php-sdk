<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class DeleteApiTemplateRequest extends Model
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
     * @description 集群模板id。
     *
     * @example at-****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'apiName'         => 'ApiName',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApiTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
