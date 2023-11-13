<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventIspResponseBody;

use AlibabaCloud\Tea\Model;

class isps extends Model
{
    /**
     * @description The number of request packets that were sent from the ISP.
     *
     * @example 230
     *
     * @var int
     */
    public $inPkts;

    /**
     * @description The code of the ISP. Valid values:
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
     * @example 1000323
     *
     * @var string
     */
    public $isp;
    protected $_name = [
        'inPkts' => 'InPkts',
        'isp'    => 'Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inPkts) {
            $res['InPkts'] = $this->inPkts;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
