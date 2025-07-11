<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpResponseBody;

use AlibabaCloud\Tea\Model;

class topIp extends Model
{
    /**
     * @description The ordinal number of the area to which the IP address belongs.
     *
     * @example 310000
     *
     * @var string
     */
    public $area;

    /**
     * @description The total number of requests that are sent from the IP address.
     *
     * @example 2622
     *
     * @var int
     */
    public $count;

    /**
     * @description The IP address.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ISP.
     *
     * @example AAA
     *
     * @var string
     */
    public $isp;
    protected $_name = [
        'area' => 'Area',
        'count' => 'Count',
        'ip' => 'Ip',
        'isp' => 'Isp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
