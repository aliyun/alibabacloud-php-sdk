<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody\areas;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @description Indicates whether the region is in the Chinese mainland. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $chinaMainland;

    /**
     * @description The line type of the elastic IP address (EIP) in the acceleration region. Valid values:
     *
     *   **BGP**: BGP (Multi-ISP) lines.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines.
     *
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @description The acceleration region name.
     *
     * @example China (Qingdao)
     *
     * @var string
     */
    public $localName;

    /**
     * @description Indicates whether multiple zones are supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $multiAz;

    /**
     * @description The ID of the acceleration region.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether IPv6 is supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $supportIpv6;
    protected $_name = [
        'chinaMainland' => 'ChinaMainland',
        'ispTypeList'   => 'IspTypeList',
        'localName'     => 'LocalName',
        'multiAz'       => 'MultiAz',
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
        if (null !== $this->multiAz) {
            $res['MultiAz'] = $this->multiAz;
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
        if (isset($map['MultiAz'])) {
            $model->multiAz = $map['MultiAz'];
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
