<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $releaseReason;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $releaseAgent;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var events
     */
    public $events;

    /**
     * @var string
     */
    public $privacyNumber;
    protected $_name = [
        'startTime'     => 'StartTime',
        'releaseReason' => 'ReleaseReason',
        'callType'      => 'CallType',
        'releaseAgent'  => 'ReleaseAgent',
        'caller'        => 'Caller',
        'callee'        => 'Callee',
        'events'        => 'Events',
        'privacyNumber' => 'PrivacyNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->releaseAgent) {
            $res['ReleaseAgent'] = $this->releaseAgent;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->events) {
            $res['Events'] = null !== $this->events ? $this->events->toMap() : null;
        }
        if (null !== $this->privacyNumber) {
            $res['PrivacyNumber'] = $this->privacyNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['ReleaseAgent'])) {
            $model->releaseAgent = $map['ReleaseAgent'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Events'])) {
            $model->events = events::fromMap($map['Events']);
        }
        if (isset($map['PrivacyNumber'])) {
            $model->privacyNumber = $map['PrivacyNumber'];
        }

        return $model;
    }
}
