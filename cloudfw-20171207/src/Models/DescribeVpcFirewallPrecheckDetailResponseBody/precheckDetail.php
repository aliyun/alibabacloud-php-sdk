<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPrecheckDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPrecheckDetailResponseBody\precheckDetail\precheckEntityGroups;

class precheckDetail extends Model
{
    /**
     * @var string
     */
    public $firewallId;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var precheckEntityGroups[]
     */
    public $precheckEntityGroups;

    /**
     * @var string
     */
    public $precheckStatus;

    /**
     * @var string
     */
    public $precheckTimestamp;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'firewallId' => 'FirewallId',
        'networkInstanceId' => 'NetworkInstanceId',
        'precheckEntityGroups' => 'PrecheckEntityGroups',
        'precheckStatus' => 'PrecheckStatus',
        'precheckTimestamp' => 'PrecheckTimestamp',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        if (\is_array($this->precheckEntityGroups)) {
            Model::validateArray($this->precheckEntityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }

        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->precheckEntityGroups) {
            if (\is_array($this->precheckEntityGroups)) {
                $res['PrecheckEntityGroups'] = [];
                $n1 = 0;
                foreach ($this->precheckEntityGroups as $item1) {
                    $res['PrecheckEntityGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = $this->precheckStatus;
        }

        if (null !== $this->precheckTimestamp) {
            $res['PrecheckTimestamp'] = $this->precheckTimestamp;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }

        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['PrecheckEntityGroups'])) {
            if (!empty($map['PrecheckEntityGroups'])) {
                $model->precheckEntityGroups = [];
                $n1 = 0;
                foreach ($map['PrecheckEntityGroups'] as $item1) {
                    $model->precheckEntityGroups[$n1] = precheckEntityGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = $map['PrecheckStatus'];
        }

        if (isset($map['PrecheckTimestamp'])) {
            $model->precheckTimestamp = $map['PrecheckTimestamp'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
