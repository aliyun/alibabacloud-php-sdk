<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListEntitiesResponseBody\data;

use AlibabaCloud\Dara\Model;

class responseData extends Model
{
    /**
     * @var int
     */
    public $alertNum;

    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var string
     */
    public $cloudCode;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityInfo;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityUuid;

    /**
     * @var int
     */
    public $eventNum;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $malwareType;

    /**
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'alertNum' => 'AlertNum',
        'alertUuid' => 'AlertUuid',
        'aliuid' => 'Aliuid',
        'cloudCode' => 'CloudCode',
        'entityId' => 'EntityId',
        'entityInfo' => 'EntityInfo',
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'entityUuid' => 'EntityUuid',
        'eventNum' => 'EventNum',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'malwareType' => 'MalwareType',
        'subUserId' => 'SubUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNum) {
            $res['AlertNum'] = $this->alertNum;
        }

        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityInfo) {
            $res['EntityInfo'] = $this->entityInfo;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
        }

        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->malwareType) {
            $res['MalwareType'] = $this->malwareType;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
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
        if (isset($map['AlertNum'])) {
            $model->alertNum = $map['AlertNum'];
        }

        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityInfo'])) {
            $model->entityInfo = $map['EntityInfo'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['MalwareType'])) {
            $model->malwareType = $map['MalwareType'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
