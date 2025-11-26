<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDropTrafficTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $aclDrop;

    /**
     * @var string
     */
    public $dataTime;

    /**
     * @var int
     */
    public $dropSession;

    /**
     * @var int
     */
    public $ipsDrop;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $totalSession;
    protected $_name = [
        'aclDrop' => 'AclDrop',
        'dataTime' => 'DataTime',
        'dropSession' => 'DropSession',
        'ipsDrop' => 'IpsDrop',
        'time' => 'Time',
        'totalSession' => 'TotalSession',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclDrop) {
            $res['AclDrop'] = $this->aclDrop;
        }

        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }

        if (null !== $this->dropSession) {
            $res['DropSession'] = $this->dropSession;
        }

        if (null !== $this->ipsDrop) {
            $res['IpsDrop'] = $this->ipsDrop;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->totalSession) {
            $res['TotalSession'] = $this->totalSession;
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
        if (isset($map['AclDrop'])) {
            $model->aclDrop = $map['AclDrop'];
        }

        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }

        if (isset($map['DropSession'])) {
            $model->dropSession = $map['DropSession'];
        }

        if (isset($map['IpsDrop'])) {
            $model->ipsDrop = $map['IpsDrop'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TotalSession'])) {
            $model->totalSession = $map['TotalSession'];
        }

        return $model;
    }
}
