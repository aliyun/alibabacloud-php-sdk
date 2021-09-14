<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsCheckInBastionResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @var bool
     */
    public $allocationStatus;

    /**
     * @var bool
     */
    public $inBastion;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'status'            => 'Status',
        'dedicatedHostName' => 'DedicatedHostName',
        'allocationStatus'  => 'AllocationStatus',
        'inBastion'         => 'InBastion',
        'hostName'          => 'HostName',
        'ip'                => 'Ip',
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
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->inBastion) {
            $res['InBastion'] = $this->inBastion;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['InBastion'])) {
            $model->inBastion = $map['InBastion'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
