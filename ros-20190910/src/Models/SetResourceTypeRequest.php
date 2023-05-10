<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetResourceTypeRequest extends Model
{
    /**
     * @example v1
     *
     * @var string
     */
    public $defaultVersionId;

    /**
     * @example It is a demo.
     *
     * @var string
     */
    public $description;

    /**
     * @example MODULE::MyOrganization::MyService::MyUsecase
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example v1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'defaultVersionId' => 'DefaultVersionId',
        'description'      => 'Description',
        'resourceType'     => 'ResourceType',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultVersionId) {
            $res['DefaultVersionId'] = $this->defaultVersionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResourceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultVersionId'])) {
            $model->defaultVersionId = $map['DefaultVersionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
