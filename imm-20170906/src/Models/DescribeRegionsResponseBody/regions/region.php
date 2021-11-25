<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var string[]
     */
    public $projectTypes;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'projectTypes' => 'ProjectTypes',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectTypes) {
            $res['ProjectTypes'] = $this->projectTypes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectTypes'])) {
            if (!empty($map['ProjectTypes'])) {
                $model->projectTypes = $map['ProjectTypes'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
