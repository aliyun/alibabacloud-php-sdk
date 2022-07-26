<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances;
use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @var AICInstances[]
     */
    public $AICInstances;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'AICInstances' => 'AICInstances',
        'creationTime' => 'CreationTime',
        'ensRegionId'  => 'EnsRegionId',
        'expiredTime'  => 'ExpiredTime',
        'serverId'     => 'ServerId',
        'specName'     => 'SpecName',
        'state'        => 'State',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AICInstances) {
            $res['AICInstances'] = [];
            if (null !== $this->AICInstances && \is_array($this->AICInstances)) {
                $n = 0;
                foreach ($this->AICInstances as $item) {
                    $res['AICInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AICInstances'])) {
            if (!empty($map['AICInstances'])) {
                $model->AICInstances = [];
                $n                   = 0;
                foreach ($map['AICInstances'] as $item) {
                    $model->AICInstances[$n++] = null !== $item ? AICInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
