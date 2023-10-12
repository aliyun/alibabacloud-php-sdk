<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class resourceType extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceTypeName;
    protected $_name = [
        'key'              => 'Key',
        'resourceType'     => 'ResourceType',
        'resourceTypeName' => 'ResourceTypeName',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceTypeName) {
            $res['ResourceTypeName'] = $this->resourceTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceTypeName'])) {
            $model->resourceTypeName = $map['ResourceTypeName'];
        }

        return $model;
    }
}
