<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @var int
     */
    public $createEndDate;

    /**
     * @var int
     */
    public $createStartDate;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $eventAffiliation;

    /**
     * @var int
     */
    public $eventLevel;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var int
     */
    public $eventType;

    /**
     * @var int
     */
    public $handleEndDate;

    /**
     * @var int
     */
    public $handleStartDate;

    /**
     * @var int
     */
    public $handleType;

    /**
     * @var int
     */
    public $pageSize;

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
    protected $_name = [
        'createEndDate'     => 'CreateEndDate',
        'createStartDate'   => 'CreateStartDate',
        'currentPage'       => 'CurrentPage',
        'eventAffiliation'  => 'EventAffiliation',
        'eventLevel'        => 'EventLevel',
        'eventStatus'       => 'EventStatus',
        'eventType'         => 'EventType',
        'handleEndDate'     => 'HandleEndDate',
        'handleStartDate'   => 'HandleStartDate',
        'handleType'        => 'HandleType',
        'pageSize'          => 'PageSize',
        'propertyName'      => 'PropertyName',
        'propertyPrivateIp' => 'PropertyPrivateIp',
        'propertyPublicIp'  => 'PropertyPublicIp',
        'propertyUuid'      => 'PropertyUuid',
        'suspect'           => 'Suspect',
        'suspectSig'        => 'SuspectSig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createEndDate) {
            $res['CreateEndDate'] = $this->createEndDate;
        }
        if (null !== $this->createStartDate) {
            $res['CreateStartDate'] = $this->createStartDate;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->handleEndDate) {
            $res['HandleEndDate'] = $this->handleEndDate;
        }
        if (null !== $this->handleStartDate) {
            $res['HandleStartDate'] = $this->handleStartDate;
        }
        if (null !== $this->handleType) {
            $res['HandleType'] = $this->handleType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateEndDate'])) {
            $model->createEndDate = $map['CreateEndDate'];
        }
        if (isset($map['CreateStartDate'])) {
            $model->createStartDate = $map['CreateStartDate'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['HandleEndDate'])) {
            $model->handleEndDate = $map['HandleEndDate'];
        }
        if (isset($map['HandleStartDate'])) {
            $model->handleStartDate = $map['HandleStartDate'];
        }
        if (isset($map['HandleType'])) {
            $model->handleType = $map['HandleType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
