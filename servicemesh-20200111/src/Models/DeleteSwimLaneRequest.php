<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteSwimLaneRequest extends Model
{
    /**
     * @description The name of the lane group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the ASM instance.
     *
     * @example xxx
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The name of the lane.
     *
     * @example s1
     *
     * @var string
     */
    public $swimLaneName;
    protected $_name = [
        'groupName'     => 'GroupName',
        'serviceMeshId' => 'ServiceMeshId',
        'swimLaneName'  => 'SwimLaneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->swimLaneName) {
            $res['SwimLaneName'] = $this->swimLaneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSwimLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['SwimLaneName'])) {
            $model->swimLaneName = $map['SwimLaneName'];
        }

        return $model;
    }
}
