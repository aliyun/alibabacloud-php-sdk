<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventSrcIpResponseBody;

use AlibabaCloud\Tea\Model;

class ips extends Model
{
    /**
     * @description The code or ID of the source region. For more information, see [Codes of administrative regions in China and codes of countries and areas](~~167926~~). For example, **110000** indicates Beijing, China, and **us** indicates the United States.
     *
     * @example 110000
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The Internet service provider (ISP) for the volumetric attack. Valid values:
     *
     *   **100017**: China Telecom
     *   **100026**: China Unicom
     *   **100025**: China Mobile
     *   **100027**: China Education and Research Network
     *   **100020**: China Mobile Tietong
     *   **1000143**: Dr.Peng Telecom & Media Group
     *   **100080**: Beijing Gehua CATV Network
     *   **1000139**: National Radio and Television Administration
     *   **100023**: Oriental Cable Network
     *   **100063**: Founder Broadband
     *   **1000337**: China Internet Exchange
     *   **100021**: 21Vianet Group
     *   **1000333**: Wasu Media Holding
     *   **100093**: Wangsu Science & Technology
     *   **1000401**: Tencent
     *   **100099**: Baidu
     *   **1000323**: Alibaba Cloud
     *   **100098**: Alibaba
     *
     * @example 100026
     *
     * @var string
     */
    public $isp;

    /**
     * @description The source IP address of the volumetric attack.
     *
     * @example 218.***.***.24
     *
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'areaId' => 'AreaId',
        'isp'    => 'Isp',
        'srcIp'  => 'SrcIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}
