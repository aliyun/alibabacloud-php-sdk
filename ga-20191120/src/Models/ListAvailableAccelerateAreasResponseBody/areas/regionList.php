<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody\areas;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @var bool
     */
    public $chinaMainland;

    /**
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @description The name of the acceleration region.
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the acceleration region.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $supportIpv6;
    protected $_name = [
        'chinaMainland' => 'ChinaMainland',
        'ispTypeList'   => 'IspTypeList',
        'localName'     => 'LocalName',
        'regionId'      => 'RegionId',
        'supportIpv6'   => 'SupportIpv6',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chinaMainland) {
            $res['ChinaMainland'] = $this->chinaMainland;
        }
        if (null !== $this->ispTypeList) {
            $res['IspTypeList'] = $this->ispTypeList;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->supportIpv6) {
            $res['SupportIpv6'] = $this->supportIpv6;
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
        if (isset($map['ChinaMainland'])) {
            $model->chinaMainland = $map['ChinaMainland'];
        }
        if (isset($map['IspTypeList'])) {
            if (!empty($map['IspTypeList'])) {
                $model->ispTypeList = $map['IspTypeList'];
            }
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SupportIpv6'])) {
            $model->supportIpv6 = $map['SupportIpv6'];
        }

        return $model;
    }
}
