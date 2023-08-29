<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $accumulation;

    /**
     * @var string
     */
    public $eventAffiliation;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtHandle;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $handleType;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyPrivateIp;

    /**
     * @var string
     */
    public $propertyPublicIp;

    /**
     * @var string
     */
    public $propertyUuid;

    /**
     * @var string
     */
    public $suspect;

    /**
     * @var string
     */
    public $suspectSig;

    /**
     * @var string
     */
    public $suspectWhiteList;
    protected $_name = [
        'accumulation'      => 'Accumulation',
        'eventAffiliation'  => 'EventAffiliation',
        'eventLevel'        => 'EventLevel',
        'eventStatus'       => 'EventStatus',
        'eventType'         => 'EventType',
        'eventUuid'         => 'EventUuid',
        'gmtCreate'         => 'GmtCreate',
        'gmtHandle'         => 'GmtHandle',
        'gmtModified'       => 'GmtModified',
        'handleType'        => 'HandleType',
        'propertyName'      => 'PropertyName',
        'propertyPrivateIp' => 'PropertyPrivateIp',
        'propertyPublicIp'  => 'PropertyPublicIp',
        'propertyUuid'      => 'PropertyUuid',
        'suspect'           => 'Suspect',
        'suspectSig'        => 'SuspectSig',
        'suspectWhiteList'  => 'SuspectWhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accumulation) {
            $res['Accumulation'] = $this->accumulation;
        }
        if (null !== $this->eventAffiliation) {
            $res['EventAffiliation'] = $this->eventAffiliation;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtHandle) {
            $res['GmtHandle'] = $this->gmtHandle;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->handleType) {
            $res['HandleType'] = $this->handleType;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyPrivateIp) {
            $res['PropertyPrivateIp'] = $this->propertyPrivateIp;
        }
        if (null !== $this->propertyPublicIp) {
            $res['PropertyPublicIp'] = $this->propertyPublicIp;
        }
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }
        if (null !== $this->suspect) {
            $res['Suspect'] = $this->suspect;
        }
        if (null !== $this->suspectSig) {
            $res['SuspectSig'] = $this->suspectSig;
        }
        if (null !== $this->suspectWhiteList) {
            $res['SuspectWhiteList'] = $this->suspectWhiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accumulation'])) {
            $model->accumulation = $map['Accumulation'];
        }
        if (isset($map['EventAffiliation'])) {
            $model->eventAffiliation = $map['EventAffiliation'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtHandle'])) {
            $model->gmtHandle = $map['GmtHandle'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HandleType'])) {
            $model->handleType = $map['HandleType'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['PropertyPrivateIp'])) {
            $model->propertyPrivateIp = $map['PropertyPrivateIp'];
        }
        if (isset($map['PropertyPublicIp'])) {
            $model->propertyPublicIp = $map['PropertyPublicIp'];
        }
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }
        if (isset($map['Suspect'])) {
            $model->suspect = $map['Suspect'];
        }
        if (isset($map['SuspectSig'])) {
            $model->suspectSig = $map['SuspectSig'];
        }
        if (isset($map['SuspectWhiteList'])) {
            $model->suspectWhiteList = $map['SuspectWhiteList'];
        }

        return $model;
    }
}
