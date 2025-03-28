<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class SetResourceTypeRequest extends Model
{
    /**
     * @var string
     */
    public $defaultVersionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'defaultVersionId' => 'DefaultVersionId',
        'description' => 'Description',
        'resourceType' => 'ResourceType',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
