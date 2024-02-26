<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateTagRequest extends Model
{
    /**
     * @example dataset_version
     *
     * @var string
     */
    public $key;

    /**
     * @example inst-my1tk3jggooi5uwks
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example v0.1.0
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'          => 'Key',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
