<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCrossCloudRegionResponseBody\crossCloudRegionList;

use AlibabaCloud\Dara\Model;

class crossCloudZoneList extends Model
{
    /**
     * @var string
     */
    public $crossCloudZoneId;

    /**
     * @var string
     */
    public $crossCloudZoneName;
    protected $_name = [
        'crossCloudZoneId' => 'CrossCloudZoneId',
        'crossCloudZoneName' => 'CrossCloudZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossCloudZoneId) {
            $res['CrossCloudZoneId'] = $this->crossCloudZoneId;
        }

        if (null !== $this->crossCloudZoneName) {
            $res['CrossCloudZoneName'] = $this->crossCloudZoneName;
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
        if (isset($map['CrossCloudZoneId'])) {
            $model->crossCloudZoneId = $map['CrossCloudZoneId'];
        }

        if (isset($map['CrossCloudZoneName'])) {
            $model->crossCloudZoneName = $map['CrossCloudZoneName'];
        }

        return $model;
    }
}
