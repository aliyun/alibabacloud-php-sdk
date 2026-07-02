<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallTrafficTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $internetBps;

    /**
     * @var int
     */
    public $natBps;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $totalBps;

    /**
     * @var int
     */
    public $vpcBps;
    protected $_name = [
        'internetBps' => 'InternetBps',
        'natBps' => 'NatBps',
        'time' => 'Time',
        'totalBps' => 'TotalBps',
        'vpcBps' => 'VpcBps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetBps) {
            $res['InternetBps'] = $this->internetBps;
        }

        if (null !== $this->natBps) {
            $res['NatBps'] = $this->natBps;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->totalBps) {
            $res['TotalBps'] = $this->totalBps;
        }

        if (null !== $this->vpcBps) {
            $res['VpcBps'] = $this->vpcBps;
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
        if (isset($map['InternetBps'])) {
            $model->internetBps = $map['InternetBps'];
        }

        if (isset($map['NatBps'])) {
            $model->natBps = $map['NatBps'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TotalBps'])) {
            $model->totalBps = $map['TotalBps'];
        }

        if (isset($map['VpcBps'])) {
            $model->vpcBps = $map['VpcBps'];
        }

        return $model;
    }
}
