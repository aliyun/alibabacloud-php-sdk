<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageRegionListResponseBody\regionList;

use AlibabaCloud\Dara\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $regionID;
    protected $_name = [
        'regionID' => 'RegionID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
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
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }

        return $model;
    }
}
