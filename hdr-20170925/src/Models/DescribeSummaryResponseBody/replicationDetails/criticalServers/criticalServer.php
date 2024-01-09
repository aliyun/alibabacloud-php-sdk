<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponseBody\replicationDetails\criticalServers;

use AlibabaCloud\Tea\Model;

class criticalServer extends Model
{
    /**
     * @example connected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example i-bp1a4374akk4527gbt9x
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description RPO
     *
     * @example 30
     *
     * @var int
     */
    public $rpo;

    /**
     * @example sr-0005qxusucb0fqqdf4ba
     *
     * @var string
     */
    public $serverId;

    /**
     * @example s-0005qxusucbii3ba2uve
     *
     * @var string
     */
    public $sitePairId;

    /**
     * @example replicating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'instanceId'       => 'InstanceId',
        'rpo'              => 'Rpo',
        'serverId'         => 'ServerId',
        'sitePairId'       => 'SitePairId',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->rpo) {
            $res['Rpo'] = $this->rpo;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return criticalServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Rpo'])) {
            $model->rpo = $map['Rpo'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
