<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags. This parameter takes effect only if TagKeys is left empty. Valid values: true and false. Default value: false. TagKeys is required if this parameter is set to false.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the resources for which you want to modify the resource group. The number of resource IDs is 1 to 50.
     *
     *   If you set ResourceType to template, specify ResourceIds in the ["TemplateName1","TemplateName2"] format.
     *   If you set ResourceType to parameter, specify ResourceIds in the ["Name1","Name2"] format.
     *   If you set ResourceType to secretparameter, specify ResourceIds in the ["Name1","Name2"] format.
     *   If you set ResourceType to stateconfiguration, specify ResourceIds in the ["StateConfigurationId 1","StateConfigurationId 2"] format.
     *   If you set ResourceType to application, specify ResourceIds in the ["Name1","Name2"] format.
     *
     * This parameter is required.
     * @example ["templateName1","templateName2"]
     *
     * @var mixed[]
     */
    public $resourceIds;

    /**
     * @description The type of the resource for which you want to modify the resource group. Valid values:
     *
     *   template: template.
     *   parameter: parameter.
     *   secretparameter: encryption parameter.
     *   stateconfiguration: desired-state configuration.
     *   application: application.
     *
     * This parameter is required.
     * @example template
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys. The number of keys ranges from 1 to 20.
     *
     * @example ["k1","k2"]
     *
     * @var mixed[]
     */
    public $tagKeys;
    protected $_name = [
        'all'          => 'All',
        'regionId'     => 'RegionId',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tagKeys'      => 'TagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }

        return $model;
    }
}
