<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowJobRequest extends Model
{
    /**
     * @description 作业ID。您可以调用ListFlowJob查看作业ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 项目ID。您可以调用ListFlowProject查看项目的ID。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'id'        => 'Id',
        'projectId' => 'ProjectId',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
