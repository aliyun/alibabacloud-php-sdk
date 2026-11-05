<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeEdgeCloudRegionResponseBody\edgeCloudRegions;

use AlibabaCloud\Dara\Model;

class standbyEdgeCloudRegionList extends Model
{
    /**
     * @var string
     */
    public $standbyEdgeCloudRegionId;

    /**
     * @var string
     */
    public $standbyEdgeCloudRegionName;
    protected $_name = [
        'standbyEdgeCloudRegionId' => 'StandbyEdgeCloudRegionId',
        'standbyEdgeCloudRegionName' => 'StandbyEdgeCloudRegionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standbyEdgeCloudRegionId) {
            $res['StandbyEdgeCloudRegionId'] = $this->standbyEdgeCloudRegionId;
        }

        if (null !== $this->standbyEdgeCloudRegionName) {
            $res['StandbyEdgeCloudRegionName'] = $this->standbyEdgeCloudRegionName;
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
        if (isset($map['StandbyEdgeCloudRegionId'])) {
            $model->standbyEdgeCloudRegionId = $map['StandbyEdgeCloudRegionId'];
        }

        if (isset($map['StandbyEdgeCloudRegionName'])) {
            $model->standbyEdgeCloudRegionName = $map['StandbyEdgeCloudRegionName'];
        }

        return $model;
    }
}
