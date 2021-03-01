<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateRegionListResponseBody\regionEntityList;

use AlibabaCloud\Tea\Model;

class regionEntity extends Model
{
    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'regionName' => 'RegionName',
        'regionNo'   => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
