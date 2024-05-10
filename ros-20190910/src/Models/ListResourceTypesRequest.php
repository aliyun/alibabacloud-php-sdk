<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListResourceTypesRequest extends Model
{
    /**
     * @description The entity type. Valid values:
     *
     *   All: all types of resources.
     *   Resource (default): regular resources. For more information, see [Resources](https://help.aliyun.com/document_detail/28863.html).
     *   DataSource: DataSource resources. For more information, see [DataSource resources](https://help.aliyun.com/document_detail/404753.html).
     *   Module: modules.
     *
     * @example Resource
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The provider of the resource type. Valid values:
     *
     *   ROS (default): The resource type is provided by Resource Orchestration Service (ROS).
     *   Self: The resource type is provided by you.
     *
     * @example ROS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The resource type. The resource type can contain letters, digits, colons (:), and asterisks (\\*). You can use an asterisk (\\*) to perform a fuzzy match.
     *
     * @example MODULE::MyOrganization::MyService::MyUsecase
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'entityType'   => 'EntityType',
        'provider'     => 'Provider',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
