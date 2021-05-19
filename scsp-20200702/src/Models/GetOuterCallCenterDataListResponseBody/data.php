<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetOuterCallCenterDataListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endReason;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $toPhoneNum;

    /**
     * @var string
     */
    public $userInfo;

    /**
     * @var string
     */
    public $interveneTime;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $fromPhoneNum;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'endReason'     => 'EndReason',
        'callType'      => 'CallType',
        'acid'          => 'Acid',
        'toPhoneNum'    => 'ToPhoneNum',
        'userInfo'      => 'UserInfo',
        'interveneTime' => 'InterveneTime',
        'bizId'         => 'BizId',
        'sessionId'     => 'SessionId',
        'fromPhoneNum'  => 'FromPhoneNum',
        'extInfo'       => 'ExtInfo',
        'bizType'       => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->toPhoneNum) {
            $res['ToPhoneNum'] = $this->toPhoneNum;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
        }
        if (null !== $this->interveneTime) {
            $res['InterveneTime'] = $this->interveneTime;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->fromPhoneNum) {
            $res['FromPhoneNum'] = $this->fromPhoneNum;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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
        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['ToPhoneNum'])) {
            $model->toPhoneNum = $map['ToPhoneNum'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }
        if (isset($map['InterveneTime'])) {
            $model->interveneTime = $map['InterveneTime'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['FromPhoneNum'])) {
            $model->fromPhoneNum = $map['FromPhoneNum'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
