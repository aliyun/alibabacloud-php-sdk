<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest;

use AlibabaCloud\Tea\Model;

class targetProperties extends Model
{
    /**
     * @description The property parameter of the principal. For example, you can specify a parameter that indicates the time range for resource sharing. Valid values of `timeRangeType`:
     *
     *   timeRange: a specific time range
     *   day: all day
     *
     * >  `TargetProperties.N.TargetId` and `TargetProperties.N.Property` must be used in pairs.
     * @example {
     * }
     * @var string
     */
    public $property;

    /**
     * @description The ID of the principal.
     *
     * >  `TargetProperties.N.TargetId` and `TargetProperties.N.Property` must be used in pairs.
     * @example 172050525300****
     *
     * @var string
     */
    public $targetId;
    protected $_name = [
        'property' => 'Property',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
