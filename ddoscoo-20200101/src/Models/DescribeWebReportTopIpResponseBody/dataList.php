<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebReportTopIpResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The ID of the location.
     *
     * @example 90998690
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The number of entries returned.
     *
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @description The Internet service provider (ISP) for the attack. Valid values:
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
     * @example 100017
     *
     * @var string
     */
    public $isp;

    /**
     * @description The source IP address.
     *
     * @example 117.186.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'areaId'   => 'AreaId',
        'count'    => 'Count',
        'isp'      => 'Isp',
        'sourceIp' => 'SourceIp',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
