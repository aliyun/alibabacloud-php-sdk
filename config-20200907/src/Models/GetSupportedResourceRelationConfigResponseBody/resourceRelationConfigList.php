<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetSupportedResourceRelationConfigResponseBody;

use AlibabaCloud\Tea\Model;

class resourceRelationConfigList extends Model
{
    /**
     * @description The type of the relationship between the resource and the object. Valid values:
     *
     *   IsContained: The object is included as part of the resource.
     *   IsAttachedTo: The object is added to the resource.
     *   IsAssociatedIn: The object is associated with the resource.
     *   Contains: The actual value contains the expected value.
     *
     * @example IsAttachedTo
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The resource type.
     *
     * @example ACS::ECS::Disk
     *
     * @var string
     */
    public $targetResourceType;
    protected $_name = [
        'relationType'       => 'RelationType',
        'targetResourceType' => 'TargetResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->targetResourceType) {
            $res['TargetResourceType'] = $this->targetResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceRelationConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['TargetResourceType'])) {
            $model->targetResourceType = $map['TargetResourceType'];
        }

        return $model;
    }
}
