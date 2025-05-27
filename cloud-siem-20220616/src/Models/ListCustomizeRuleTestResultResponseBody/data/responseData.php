<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCustomizeRuleTestResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class responseData extends Model
{
    /**
     * @var string
     */
    public $alertDesc;

    /**
     * @var string
     */
    public $alertDetail;

    /**
     * @var string
     */
    public $alertSrcProd;

    /**
     * @var string
     */
    public $alertSrcProdModule;

    /**
     * @var string
     */
    public $attCk;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $logSource;

    /**
     * @var string
     */
    public $logTime;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $subUserId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'alertDesc' => 'AlertDesc',
        'alertDetail' => 'AlertDetail',
        'alertSrcProd' => 'AlertSrcProd',
        'alertSrcProdModule' => 'AlertSrcProdModule',
        'attCk' => 'AttCk',
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'level' => 'Level',
        'logSource' => 'LogSource',
        'logTime' => 'LogTime',
        'logType' => 'LogType',
        'mainUserId' => 'MainUserId',
        'onlineStatus' => 'OnlineStatus',
        'subUserId' => 'SubUserId',
        'uuid' => 'Uuid',
        'verifyType' => 'VerifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertDesc) {
            $res['AlertDesc'] = $this->alertDesc;
        }

        if (null !== $this->alertDetail) {
            $res['AlertDetail'] = $this->alertDetail;
        }

        if (null !== $this->alertSrcProd) {
            $res['AlertSrcProd'] = $this->alertSrcProd;
        }

        if (null !== $this->alertSrcProdModule) {
            $res['AlertSrcProdModule'] = $this->alertSrcProdModule;
        }

        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }

        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
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
        if (isset($map['AlertDesc'])) {
            $model->alertDesc = $map['AlertDesc'];
        }

        if (isset($map['AlertDetail'])) {
            $model->alertDetail = $map['AlertDetail'];
        }

        if (isset($map['AlertSrcProd'])) {
            $model->alertSrcProd = $map['AlertSrcProd'];
        }

        if (isset($map['AlertSrcProdModule'])) {
            $model->alertSrcProdModule = $map['AlertSrcProdModule'];
        }

        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }

        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
