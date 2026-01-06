<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetDingtalkProjectionListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $callStatus;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $devUid;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $nickCode;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string
     */
    public $recvClientId;

    /**
     * @var string
     */
    public $recvClientName;

    /**
     * @var string
     */
    public $sendClientId;

    /**
     * @var string
     */
    public $sendClientName;

    /**
     * @var string
     */
    public $sendClientWorkNo;

    /**
     * @var int
     */
    public $startTs;

    /**
     * @var string
     */
    public $timeStr;
    protected $_name = [
        'callStatus' => 'callStatus',
        'code' => 'code',
        'devUid' => 'devUid',
        'duration' => 'duration',
        'endTs' => 'endTs',
        'nickCode' => 'nickCode',
        'orgId' => 'orgId',
        'recvClientId' => 'recvClientId',
        'recvClientName' => 'recvClientName',
        'sendClientId' => 'sendClientId',
        'sendClientName' => 'sendClientName',
        'sendClientWorkNo' => 'sendClientWorkNo',
        'startTs' => 'startTs',
        'timeStr' => 'timeStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callStatus) {
            $res['callStatus'] = $this->callStatus;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->devUid) {
            $res['devUid'] = $this->devUid;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->endTs) {
            $res['endTs'] = $this->endTs;
        }

        if (null !== $this->nickCode) {
            $res['nickCode'] = $this->nickCode;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->recvClientId) {
            $res['recvClientId'] = $this->recvClientId;
        }

        if (null !== $this->recvClientName) {
            $res['recvClientName'] = $this->recvClientName;
        }

        if (null !== $this->sendClientId) {
            $res['sendClientId'] = $this->sendClientId;
        }

        if (null !== $this->sendClientName) {
            $res['sendClientName'] = $this->sendClientName;
        }

        if (null !== $this->sendClientWorkNo) {
            $res['sendClientWorkNo'] = $this->sendClientWorkNo;
        }

        if (null !== $this->startTs) {
            $res['startTs'] = $this->startTs;
        }

        if (null !== $this->timeStr) {
            $res['timeStr'] = $this->timeStr;
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
        if (isset($map['callStatus'])) {
            $model->callStatus = $map['callStatus'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['devUid'])) {
            $model->devUid = $map['devUid'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['endTs'])) {
            $model->endTs = $map['endTs'];
        }

        if (isset($map['nickCode'])) {
            $model->nickCode = $map['nickCode'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['recvClientId'])) {
            $model->recvClientId = $map['recvClientId'];
        }

        if (isset($map['recvClientName'])) {
            $model->recvClientName = $map['recvClientName'];
        }

        if (isset($map['sendClientId'])) {
            $model->sendClientId = $map['sendClientId'];
        }

        if (isset($map['sendClientName'])) {
            $model->sendClientName = $map['sendClientName'];
        }

        if (isset($map['sendClientWorkNo'])) {
            $model->sendClientWorkNo = $map['sendClientWorkNo'];
        }

        if (isset($map['startTs'])) {
            $model->startTs = $map['startTs'];
        }

        if (isset($map['timeStr'])) {
            $model->timeStr = $map['timeStr'];
        }

        return $model;
    }
}
