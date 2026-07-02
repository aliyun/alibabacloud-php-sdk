<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallDropTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $internetDropSession;

    /**
     * @var int
     */
    public $natDropSession;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $totalDropSession;

    /**
     * @var int
     */
    public $vpcDropSession;
    protected $_name = [
        'internetDropSession' => 'InternetDropSession',
        'natDropSession' => 'NatDropSession',
        'time' => 'Time',
        'totalDropSession' => 'TotalDropSession',
        'vpcDropSession' => 'VpcDropSession',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetDropSession) {
            $res['InternetDropSession'] = $this->internetDropSession;
        }

        if (null !== $this->natDropSession) {
            $res['NatDropSession'] = $this->natDropSession;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->totalDropSession) {
            $res['TotalDropSession'] = $this->totalDropSession;
        }

        if (null !== $this->vpcDropSession) {
            $res['VpcDropSession'] = $this->vpcDropSession;
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
        if (isset($map['InternetDropSession'])) {
            $model->internetDropSession = $map['InternetDropSession'];
        }

        if (isset($map['NatDropSession'])) {
            $model->natDropSession = $map['NatDropSession'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TotalDropSession'])) {
            $model->totalDropSession = $map['TotalDropSession'];
        }

        if (isset($map['VpcDropSession'])) {
            $model->vpcDropSession = $map['VpcDropSession'];
        }

        return $model;
    }
}
