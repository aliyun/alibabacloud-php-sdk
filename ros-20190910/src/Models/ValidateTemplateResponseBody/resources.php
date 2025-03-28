<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $logicalResourceIdPattern;

    /**
     * @var string
     */
    public $resourcePath;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'logicalResourceIdPattern' => 'LogicalResourceIdPattern',
        'resourcePath' => 'ResourcePath',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
