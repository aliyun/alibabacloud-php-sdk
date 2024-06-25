<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\SDK\Nlb\V20220430\Models\GetLoadBalancerAttributeResponseBody\zoneMappings\loadBalancerAddresses;
use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The information about the IP addresses used by the NLB instance.
     *
     * @var loadBalancerAddresses[]
     */
    public $loadBalancerAddresses;

    /**
     * @description The zone status. Valid values:
     *
     *   **Active**: The zone is available.
     *   **Stopped**: The zone is disabled. You can set the zone to this status only by using Cloud Architect Design Tools (CADT).
     *   **Shifted**: The DNS record is removed.
     *   **Starting**: The zone is being enabled. You can set the zone to this status only by using CADT.
     *   **Stopping** You can set the zone to this status only by using CADT.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch in the zone. By default, each zone contains one vSwitch and one subnet.
     *
     * @example vsw-bp1rmcrwg3erh1fh8****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone. You can call the [DescribeZones](https://help.aliyun.com/document_detail/443890.html) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'loadBalancerAddresses' => 'LoadBalancerAddresses',
        'status'                => 'Status',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerAddresses) {
            $res['LoadBalancerAddresses'] = [];
            if (null !== $this->loadBalancerAddresses && \is_array($this->loadBalancerAddresses)) {
                $n = 0;
                foreach ($this->loadBalancerAddresses as $item) {
                    $res['LoadBalancerAddresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerAddresses'])) {
            if (!empty($map['LoadBalancerAddresses'])) {
                $model->loadBalancerAddresses = [];
                $n                            = 0;
                foreach ($map['LoadBalancerAddresses'] as $item) {
                    $model->loadBalancerAddresses[$n++] = null !== $item ? loadBalancerAddresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
