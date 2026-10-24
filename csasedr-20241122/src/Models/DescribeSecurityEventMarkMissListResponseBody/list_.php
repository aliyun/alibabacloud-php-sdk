<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventMarkMissListResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $assetScopeId;

    /**
     * @var string
     */
    public $disposalWay;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventNameOriginal;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventTypeOriginal;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @var string
     */
    public $filedAliasName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $hitCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $operate;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliUid' => 'AliUid',
        'assetScopeId' => 'AssetScopeId',
        'disposalWay' => 'DisposalWay',
        'eventName' => 'EventName',
        'eventNameOriginal' => 'EventNameOriginal',
        'eventType' => 'EventType',
        'eventTypeOriginal' => 'EventTypeOriginal',
        'field' => 'Field',
        'fieldValue' => 'FieldValue',
        'filedAliasName' => 'FiledAliasName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hitCount' => 'HitCount',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'operate' => 'Operate',
        'uuid' => 'Uuid',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->assetScopeId) {
            $res['AssetScopeId'] = $this->assetScopeId;
        }

        if (null !== $this->disposalWay) {
            $res['DisposalWay'] = $this->disposalWay;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventNameOriginal) {
            $res['EventNameOriginal'] = $this->eventNameOriginal;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->eventTypeOriginal) {
            $res['EventTypeOriginal'] = $this->eventTypeOriginal;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        if (null !== $this->filedAliasName) {
            $res['FiledAliasName'] = $this->filedAliasName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hitCount) {
            $res['HitCount'] = $this->hitCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AssetScopeId'])) {
            $model->assetScopeId = $map['AssetScopeId'];
        }

        if (isset($map['DisposalWay'])) {
            $model->disposalWay = $map['DisposalWay'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventNameOriginal'])) {
            $model->eventNameOriginal = $map['EventNameOriginal'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['EventTypeOriginal'])) {
            $model->eventTypeOriginal = $map['EventTypeOriginal'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        if (isset($map['FiledAliasName'])) {
            $model->filedAliasName = $map['FiledAliasName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HitCount'])) {
            $model->hitCount = $map['HitCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
