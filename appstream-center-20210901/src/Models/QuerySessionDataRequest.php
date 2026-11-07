<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class QuerySessionDataRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statDate;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'bizRegionId' => 'BizRegionId',
        'regionId' => 'RegionId',
        'statDate' => 'StatDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        return $model;
    }
}
