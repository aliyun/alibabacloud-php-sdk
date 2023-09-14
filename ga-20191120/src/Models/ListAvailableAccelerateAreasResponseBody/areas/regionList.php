<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAvailableAccelerateAreasResponseBody\areas;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @description Whether China Mainland.
     *
     * @example false
     *
     * @var bool
     */
    public $chinaMainland;

    /**
     * @description The line types of EIPs in the acceleration region.
     *
     *   **BGP**: BGP (Multi-ISP) lines
     *   **BGP_PRO**: BGP (Multi-ISP) Pro lines
     *
     * If you have the permissions to use single-ISP bandwidth, one of the following values may be returned:
     *
     *   **ChinaTelecom**: China Telecom (single ISP)
     *   **ChinaUnicom**: China Unicom (single ISP)
     *   **ChinaMobile**: China Mobile (single ISP)
     *   **ChinaTelecom_L2**: China Telecom_L2 (single ISP)
     *   **ChinaUnicom_L2**: China Unicom_L2 (single ISP)
     *   **ChinaMobile_L2**: China Mobile_L2 (single ISP)
     *
     * > Different acceleration regions support different single-ISP BGP lines.
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @description The name of the acceleration region.
     *
     * @example 青岛
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
     * @description Ipv6 supported, Valid values:
     *
     * - false
     * @example true
     *
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
