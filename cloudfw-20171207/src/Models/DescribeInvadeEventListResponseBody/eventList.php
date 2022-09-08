<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @var string
     */
    public $assetsType;

    /**
     * @var string
     */
    public $eventKey;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventSrc;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var bool
     */
    public $isIgnore;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var int
     */
    public $processStatus;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $publicIpType;

    /**
     * @var int
     */
    public $riskLevel;
    protected $_name = [
        'assetsInstanceId'   => 'AssetsInstanceId',
        'assetsInstanceName' => 'AssetsInstanceName',
        'assetsType'         => 'AssetsType',
        'eventKey'           => 'EventKey',
        'eventName'          => 'EventName',
        'eventSrc'           => 'EventSrc',
        'eventUuid'          => 'EventUuid',
        'firstTime'          => 'FirstTime',
        'isIgnore'           => 'IsIgnore',
        'lastTime'           => 'LastTime',
        'memberUid'          => 'MemberUid',
        'privateIP'          => 'PrivateIP',
        'processStatus'      => 'ProcessStatus',
        'publicIP'           => 'PublicIP',
        'publicIpType'       => 'PublicIpType',
        'riskLevel'          => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }
        if (null !== $this->assetsInstanceName) {
            $res['AssetsInstanceName'] = $this->assetsInstanceName;
        }
        if (null !== $this->assetsType) {
            $res['AssetsType'] = $this->assetsType;
        }
        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventSrc) {
            $res['EventSrc'] = $this->eventSrc;
        }
        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->isIgnore) {
            $res['IsIgnore'] = $this->isIgnore;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }
        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }
        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }
        if (null !== $this->publicIpType) {
            $res['PublicIpType'] = $this->publicIpType;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }
        if (isset($map['AssetsInstanceName'])) {
            $model->assetsInstanceName = $map['AssetsInstanceName'];
        }
        if (isset($map['AssetsType'])) {
            $model->assetsType = $map['AssetsType'];
        }
        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventSrc'])) {
            $model->eventSrc = $map['EventSrc'];
        }
        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['IsIgnore'])) {
            $model->isIgnore = $map['IsIgnore'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }
        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }
        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }
        if (isset($map['PublicIpType'])) {
            $model->publicIpType = $map['PublicIpType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
