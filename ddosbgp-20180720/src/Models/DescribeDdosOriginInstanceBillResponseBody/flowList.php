<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @description The traffic distribution by region. The JSON struct contains the following fields:
     *
     *   **bytes**: the traffic volume of EIPs with Anti-DDoS (Enhanced) enabled in a region. Unit: bytes.
     *   **memberUid**: the owner account.
     *   **instanceId**: the ID of the pay-as-you-go instance that protects the EIPs with Anti-DDoS (Enhanced) enabled.
     *   **ip**: the EIPs with Anti-DDoS (Enhanced) enabled.
     *   **region**: the region.
     *
     * >  If the memberUid field in the JSON struct is empty, the information about the current account is returned. The value of the bytes parameter in the outermost level of the JSON struct indicates the total traffic, and the values of the bytes parameters in inner levels indicate the traffic of the account.
     * @example [{\\"bytes\\":79282719,\\"memberUid\\":\\"\\",\\"regionFlows\\":{\\"cn-hangzhou\\":[{\\"bytes\\":79282719,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.57\\",\\"region\\":\\"cn-hangzhou\\"}]}}]
     *
     * @var string
     */
    public $memberFlow;

    /**
     * @description The traffic distribution by region. The JSON struct contains the following fields:
     *
     *   **bytes**: the traffic volume of EIPs with Anti-DDoS (Enhanced) enabled in a region. Unit: bytes.
     *   **instanceId**: the ID of the pay-as-you-go instance that protects the EIPs with Anti-DDoS (Enhanced) enabled.
     *   **ip**: the EIPs with Anti-DDoS (Enhanced) enabled.
     *   **region**: the region.
     *
     * @example {\\"cn-hangzhou\\":[{\\"bytes\\":0,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.124\\",\\"region\\":\\"cn-hangzhou\\"}]}
     *
     * @var string
     */
    public $regionFlow;

    /**
     * @description The timestamp. Unit: milliseconds.
     *
     * @example 1620951900
     *
     * @var int
     */
    public $time;

    /**
     * @description The traffic of EIPs with Anti-DDoS (Enhanced) enabled. Unit: bytes.
     *
     * @example 6302081067
     *
     * @var int
     */
    public $totalFlow;
    protected $_name = [
        'memberFlow' => 'MemberFlow',
        'regionFlow' => 'RegionFlow',
        'time'       => 'Time',
        'totalFlow'  => 'TotalFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberFlow) {
            $res['MemberFlow'] = $this->memberFlow;
        }
        if (null !== $this->regionFlow) {
            $res['RegionFlow'] = $this->regionFlow;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->totalFlow) {
            $res['TotalFlow'] = $this->totalFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberFlow'])) {
            $model->memberFlow = $map['MemberFlow'];
        }
        if (isset($map['RegionFlow'])) {
            $model->regionFlow = $map['RegionFlow'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TotalFlow'])) {
            $model->totalFlow = $map['TotalFlow'];
        }

        return $model;
    }
}
