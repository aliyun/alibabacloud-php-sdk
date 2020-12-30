<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupListResponseBody;

use AlibabaCloud\Tea\Model;

class groupList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $isDnsEnabled;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $blackIp;

    /**
     * @var int
     */
    public $normalIp;

    /**
     * @var int
     */
    public $cleanIp;

    /**
     * @var int
     */
    public $totalIp;

    /**
     * @var bool
     */
    public $isDisabled;

    /**
     * @var string
     */
    public $dnsStatus;

    /**
     * @var string
     */
    public $groupDesc;
    protected $_name = [
        'status'       => 'Status',
        'isDnsEnabled' => 'IsDnsEnabled',
        'groupId'      => 'GroupId',
        'blackIp'      => 'BlackIp',
        'normalIp'     => 'NormalIp',
        'cleanIp'      => 'CleanIp',
        'totalIp'      => 'TotalIp',
        'isDisabled'   => 'IsDisabled',
        'dnsStatus'    => 'DnsStatus',
        'groupDesc'    => 'GroupDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isDnsEnabled) {
            $res['IsDnsEnabled'] = $this->isDnsEnabled;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->blackIp) {
            $res['BlackIp'] = $this->blackIp;
        }
        if (null !== $this->normalIp) {
            $res['NormalIp'] = $this->normalIp;
        }
        if (null !== $this->cleanIp) {
            $res['CleanIp'] = $this->cleanIp;
        }
        if (null !== $this->totalIp) {
            $res['TotalIp'] = $this->totalIp;
        }
        if (null !== $this->isDisabled) {
            $res['IsDisabled'] = $this->isDisabled;
        }
        if (null !== $this->dnsStatus) {
            $res['DnsStatus'] = $this->dnsStatus;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsDnsEnabled'])) {
            $model->isDnsEnabled = $map['IsDnsEnabled'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['BlackIp'])) {
            $model->blackIp = $map['BlackIp'];
        }
        if (isset($map['NormalIp'])) {
            $model->normalIp = $map['NormalIp'];
        }
        if (isset($map['CleanIp'])) {
            $model->cleanIp = $map['CleanIp'];
        }
        if (isset($map['TotalIp'])) {
            $model->totalIp = $map['TotalIp'];
        }
        if (isset($map['IsDisabled'])) {
            $model->isDisabled = $map['IsDisabled'];
        }
        if (isset($map['DnsStatus'])) {
            $model->dnsStatus = $map['DnsStatus'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }

        return $model;
    }
}
