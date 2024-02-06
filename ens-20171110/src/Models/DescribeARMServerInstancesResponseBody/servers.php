<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances;
use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The information about the AIC instances.
     *
     * @var AICInstances[]
     */
    public $AICInstances;

    /**
     * @description The time when the instance was created.
     *
     * @example 2022-05-07 11:59:09
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the ENS node.
     *
     * @example cn-hanghzou-27
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The time when the instance expires.
     *
     * @example 2027-05-07 11:59:09
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The operation that was most recently performed.
     *
     * @example ServerCreate
     *
     * @var string
     */
    public $latestAction;

    /**
     * @description The name of the server.
     *
     * @example Server-Name
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the cluster to which the server belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The billing method.
     *
     * @example prepay
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the server.
     *
     * @example cas-******
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The server specification.
     *
     * @example cas.cf53r
     *
     * @var string
     */
    public $specName;

    /**
     * @description The operation status of the server. Valid values:
     *
     *   **success**
     *   **failed**
     *   **creating**
     *   **releasing**
     *   **rebooting**
     *   **upgrading**
     *
     * @example success
     *
     * @var string
     */
    public $state;

    /**
     * @description The running status of the server. Valid values:
     *
     *   **running**
     *   **stopping**
     *   **down**
     *   **starting**
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'AICInstances' => 'AICInstances',
        'creationTime' => 'CreationTime',
        'ensRegionId'  => 'EnsRegionId',
        'expiredTime'  => 'ExpiredTime',
        'latestAction' => 'LatestAction',
        'name'         => 'Name',
        'namespace'    => 'Namespace',
        'payType'      => 'PayType',
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
        if (null !== $this->latestAction) {
            $res['LatestAction'] = $this->latestAction;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (isset($map['LatestAction'])) {
            $model->latestAction = $map['LatestAction'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
