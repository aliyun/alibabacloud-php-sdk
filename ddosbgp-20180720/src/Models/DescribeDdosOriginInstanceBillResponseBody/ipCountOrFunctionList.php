<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Tea\Model;

class ipCountOrFunctionList extends Model
{
    /**
     * @description The application scope of the instance. Valid values:
     *
     *   **only_mainland_china**: regions in the Chinese mainland.
     *   **global**: all regions.
     *   **international_and_hmt**: regions outside the Chinese mainland.
     *
     * @example global
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The number of IP addresses protected by the pay-as-you-go instance in the Chinese mainland.
     *
     * @example 5
     *
     * @var int
     */
    public $ipCntCn;

    /**
     * @description The number of IP addresses protected by the pay-as-you-go instance outside the Chinese mainland.
     *
     * @example 5
     *
     * @var int
     */
    public $ipCntOv;

    /**
     * @description The bill distribution by account. The JSON struct contains the following fields:
     *
     *   **eipCnIpCount**: the number of EIPs with Anti-DDoS (Enhanced) enabled in the Chinese mainland.
     *   **eipOvIpCount**: the number of EIPs with Anti-DDoS (Enhanced) enabled outside the Chinese mainland.
     *   **memberUid**: the owner account.
     *   **standardAssetsCnIpCount**: the number of IP addresses of regular Alibaba Cloud services in the Chinese mainland.
     *   **standardAssetsOvIpCount**: the number of IP addresses of regular Alibaba Cloud services outside the Chinese mainland.
     *
     * >  If the memberUid field in the JSON struct is empty, the information about the current account is returned.
     * @example [{\\"eipCnIpCount\\":3,\\"eipOvIpCount\\":18,\\"memberUid\\":\\"\\",\\"standardAssetsCnIpCount\\":2,\\"standardAssetsOvIpCount\\":0},{\\"eipCnIpCount\\":3,\\"eipOvIpCount\\":0,\\"memberUid\\":\\"1776997906319249\\",\\"standardAssetsCnIpCount\\":0,\\"standardAssetsOvIpCount\\":0}]
     *
     * @var string
     */
    public $memberIpCnt;

    /**
     * @description The billing time. Unit: milliseconds.
     *
     * @example 1680278400000
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'coverage'    => 'Coverage',
        'ipCntCn'     => 'IpCntCn',
        'ipCntOv'     => 'IpCntOv',
        'memberIpCnt' => 'MemberIpCnt',
        'time'        => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->ipCntCn) {
            $res['IpCntCn'] = $this->ipCntCn;
        }
        if (null !== $this->ipCntOv) {
            $res['IpCntOv'] = $this->ipCntOv;
        }
        if (null !== $this->memberIpCnt) {
            $res['MemberIpCnt'] = $this->memberIpCnt;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipCountOrFunctionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['IpCntCn'])) {
            $model->ipCntCn = $map['IpCntCn'];
        }
        if (isset($map['IpCntOv'])) {
            $model->ipCntOv = $map['IpCntOv'];
        }
        if (isset($map['MemberIpCnt'])) {
            $model->memberIpCnt = $map['MemberIpCnt'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
