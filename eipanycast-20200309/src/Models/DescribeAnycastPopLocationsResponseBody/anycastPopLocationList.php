<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastPopLocationsResponseBody;

use AlibabaCloud\Dara\Model;

class anycastPopLocationList extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
