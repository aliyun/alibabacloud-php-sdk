<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class SaveStatsRequest extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $callStartTime;

    /**
     * @var string
     */
    public $calleeNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $recordTime;

    /**
     * @var string
     */
    public $stats;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'callId'        => 'CallId',
        'callStartTime' => 'CallStartTime',
        'calleeNumber'  => 'CalleeNumber',
        'callerNumber'  => 'CallerNumber',
        'instanceId'    => 'InstanceId',
        'recordTime'    => 'RecordTime',
        'stats'         => 'Stats',
        'tenantId'      => 'TenantId',
        'uid'           => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callStartTime) {
            $res['CallStartTime'] = $this->callStartTime;
        }
        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }
        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
        }
        if (null !== $this->stats) {
            $res['Stats'] = $this->stats;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveStatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallStartTime'])) {
            $model->callStartTime = $map['CallStartTime'];
        }
        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }
        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }
        if (isset($map['Stats'])) {
            $model->stats = $map['Stats'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
