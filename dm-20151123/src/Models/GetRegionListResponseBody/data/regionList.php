<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetRegionListResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionDesc;
    protected $_name = [
        'region'     => 'Region',
        'regionDesc' => 'RegionDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionDesc) {
            $res['RegionDesc'] = $this->regionDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionDesc'])) {
            $model->regionDesc = $map['RegionDesc'];
        }

        return $model;
    }
}
