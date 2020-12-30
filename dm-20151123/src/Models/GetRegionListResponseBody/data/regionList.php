<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetRegionListResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @var string
     */
    public $regionDesc;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'regionDesc' => 'RegionDesc',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionDesc) {
            $res['RegionDesc'] = $this->regionDesc;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['RegionDesc'])) {
            $model->regionDesc = $map['RegionDesc'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
