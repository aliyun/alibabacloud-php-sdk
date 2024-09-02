<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest\data;
use AlibabaCloud\Tea\Model;

class CreateFunctionResourceRequest extends Model
{
    /**
     * @description The resource data. The data structure varies with the resource type.
     *
     * @var data
     */
    public $data;

    /**
     * @description The description of the resource.
     *
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the resource.
     *
     * @example fg_jsoon
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   feature_generator
     *
     * <!-- -->
     *
     *   raw_file
     *
     * <!-- -->
     * @example feature_generator
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'data'         => 'Data',
        'description'  => 'Description',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
