<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeRiskEventPayloadRequest extends Model
{
    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $dstVpcId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $firewallType;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $srcVpcId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $UUID;
    protected $_name = [
        'dstIP' => 'DstIP',
        'dstVpcId' => 'DstVpcId',
        'endTime' => 'EndTime',
        'firewallType' => 'FirewallType',
        'publicIP' => 'PublicIP',
        'srcIP' => 'SrcIP',
        'srcVpcId' => 'SrcVpcId',
        'startTime' => 'StartTime',
        'UUID' => 'UUID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->dstVpcId) {
            $res['DstVpcId'] = $this->dstVpcId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->srcVpcId) {
            $res['SrcVpcId'] = $this->srcVpcId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
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
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['DstVpcId'])) {
            $model->dstVpcId = $map['DstVpcId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['SrcVpcId'])) {
            $model->srcVpcId = $map['SrcVpcId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
