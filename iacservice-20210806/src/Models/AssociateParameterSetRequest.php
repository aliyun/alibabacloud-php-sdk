<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class AssociateParameterSetRequest extends Model
{
    /**
     * @var string[]
     */
    public $parameterSetIds;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'parameterSetIds' => 'parameterSetIds',
        'resourceId'      => 'resourceId',
        'resourceType'    => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterSetIds) {
            $res['parameterSetIds'] = $this->parameterSetIds;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateParameterSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parameterSetIds'])) {
            if (!empty($map['parameterSetIds'])) {
                $model->parameterSetIds = $map['parameterSetIds'];
            }
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
