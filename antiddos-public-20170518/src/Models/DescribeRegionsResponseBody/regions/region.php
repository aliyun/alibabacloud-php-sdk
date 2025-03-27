<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $regionEnName;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $regionNoAlias;
    protected $_name = [
        'regionEnName' => 'RegionEnName',
        'regionName' => 'RegionName',
        'regionNo' => 'RegionNo',
        'regionNoAlias' => 'RegionNoAlias',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionEnName) {
            $res['RegionEnName'] = $this->regionEnName;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->regionNoAlias) {
            $res['RegionNoAlias'] = $this->regionNoAlias;
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
        if (isset($map['RegionEnName'])) {
            $model->regionEnName = $map['RegionEnName'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RegionNoAlias'])) {
            $model->regionNoAlias = $map['RegionNoAlias'];
        }

        return $model;
    }
}
