<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example server
     *
     * @var string
     */
    public $logicalResourceIdPattern;

    /**
     * @example server
     *
     * @var string
     */
    public $resourcePath;

    /**
     * @example ALIYUN::ECS::InstanceGroup
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'logicalResourceIdPattern' => 'LogicalResourceIdPattern',
        'resourcePath'             => 'ResourcePath',
        'resourceType'             => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalResourceIdPattern) {
            $res['LogicalResourceIdPattern'] = $this->logicalResourceIdPattern;
        }
        if (null !== $this->resourcePath) {
            $res['ResourcePath'] = $this->resourcePath;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalResourceIdPattern'])) {
            $model->logicalResourceIdPattern = $map['LogicalResourceIdPattern'];
        }
        if (isset($map['ResourcePath'])) {
            $model->resourcePath = $map['ResourcePath'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
