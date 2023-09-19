<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class TagResourcesShrinkRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the resources for which you want to modify the resource group. The number of resource IDs is 1 to 50.
     *
     *   If you set ResourceType to template, specify ResourceIds in the \["TemplateName1","TemplateName2"] format.
     *   If you set ResourceType to parameter, specify ResourceIds in the \["Name1","Name2"] format.
     *   If you set ResourceType to secretparameter, specify ResourceIds in the \["Name1","Name2"] format.
     *   If you set ResourceType to stateconfiguration, specify ResourceIds in the \["StateConfigurationId 1","StateConfigurationId 2"] format.
     *   If you set ResourceType to application, specify ResourceIds in the \["Name1","Name2"] format.
     *
     * @example ["templateName1","templateName2"]
     *
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @description The type of the resource for which you want to modify the resource group. Valid values:
     *
     *   template: template.
     *   parameter: parameter.
     *   secretparameter: encryption parameter.
     *   stateconfiguration: desired-state configuration.
     *   application: application.
     *
     * @example template
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys and values. The number of key-value pairs ranges from 1 to 20.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'regionId'          => 'RegionId',
        'resourceIdsShrink' => 'ResourceIds',
        'resourceType'      => 'ResourceType',
        'tagsShrink'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
