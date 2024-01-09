<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class EnableReplicationRequest extends Model
{
    /**
     * @example {"scheduleType":"CRON","expression":"0 0 *\/1 * * 0,1,2,3,4,5,6","initialDelay":0}
     *
     * @var string
     */
    public $crashConsistentPointPolicy;

    /**
     * @example vsw-bp1g0s2u3b2kbn46kiy53
     *
     * @var string
     */
    public $recoveryNetwork;

    /**
     * @example vsw-bp1g0s2u3b2kbn46kiy53
     *
     * @var string
     */
    public $replicationNetwork;

    /**
     * @example false
     *
     * @var bool
     */
    public $replicationUseEssd;

    /**
     * @example false
     *
     * @var bool
     */
    public $replicationUseSsd;

    /**
     * @example sr-0005qxusucbo6yomzb9x
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'crashConsistentPointPolicy' => 'CrashConsistentPointPolicy',
        'recoveryNetwork'            => 'RecoveryNetwork',
        'replicationNetwork'         => 'ReplicationNetwork',
        'replicationUseEssd'         => 'ReplicationUseEssd',
        'replicationUseSsd'          => 'ReplicationUseSsd',
        'serverId'                   => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crashConsistentPointPolicy) {
            $res['CrashConsistentPointPolicy'] = $this->crashConsistentPointPolicy;
        }
        if (null !== $this->recoveryNetwork) {
            $res['RecoveryNetwork'] = $this->recoveryNetwork;
        }
        if (null !== $this->replicationNetwork) {
            $res['ReplicationNetwork'] = $this->replicationNetwork;
        }
        if (null !== $this->replicationUseEssd) {
            $res['ReplicationUseEssd'] = $this->replicationUseEssd;
        }
        if (null !== $this->replicationUseSsd) {
            $res['ReplicationUseSsd'] = $this->replicationUseSsd;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableReplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrashConsistentPointPolicy'])) {
            $model->crashConsistentPointPolicy = $map['CrashConsistentPointPolicy'];
        }
        if (isset($map['RecoveryNetwork'])) {
            $model->recoveryNetwork = $map['RecoveryNetwork'];
        }
        if (isset($map['ReplicationNetwork'])) {
            $model->replicationNetwork = $map['ReplicationNetwork'];
        }
        if (isset($map['ReplicationUseEssd'])) {
            $model->replicationUseEssd = $map['ReplicationUseEssd'];
        }
        if (isset($map['ReplicationUseSsd'])) {
            $model->replicationUseSsd = $map['ReplicationUseSsd'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
