<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortCcAttackTopIPResponseBody;

use AlibabaCloud\Tea\Model;

class topIp extends Model
{
    /**
     * @description The code of the location from which the attack is initiated. For more information, see [Codes of administrative regions in China and codes of countries and areas](https://help.aliyun.com/document_detail/167926.html). For example, **110000** indicates Beijing, China, and **us** indicates the United States.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The number of attacks from the IP address.
     *
     * @example 33971
     *
     * @var int
     */
    public $pv;

    /**
     * @description The source IP address of the attack.
     *
     * @example 172.18.XX.XX
     *
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'areaId' => 'AreaId',
        'pv'     => 'Pv',
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
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}
