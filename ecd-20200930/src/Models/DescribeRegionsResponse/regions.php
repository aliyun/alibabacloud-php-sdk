<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsResponse;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('regionEndpoint', $this->regionEndpoint, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
