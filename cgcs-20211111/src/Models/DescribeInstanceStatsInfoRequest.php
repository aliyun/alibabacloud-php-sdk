<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceStatsInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $districtIds;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string[]
     */
    public $projectIds;
    protected $_name = [
        'districtIds'   => 'DistrictIds',
        'instanceTypes' => 'InstanceTypes',
        'projectIds'    => 'ProjectIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->districtIds) {
            $res['DistrictIds'] = $this->districtIds;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceStatsInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistrictIds'])) {
            if (!empty($map['DistrictIds'])) {
                $model->districtIds = $map['DistrictIds'];
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }

        return $model;
    }
}
