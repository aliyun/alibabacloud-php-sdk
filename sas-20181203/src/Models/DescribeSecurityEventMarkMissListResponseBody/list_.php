<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventMarkMissListResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The user ID.
     *
     * @example 176618589410****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The name of the alert event. The value indicates a subtype.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The name of the alert event. The value indicates a type.
     *
     * @example login_common_location
     *
     * @var string
     */
    public $eventNameOriginal;

    /**
     * @description The subtype of the alert event.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The type of the alert event.
     *
     * @example login_common_location
     *
     * @var string
     */
    public $eventTypeOriginal;

    /**
     * @description The field that is used in the whitelist rule.
     *
     * @example type
     *
     * @var string
     */
    public $field;

    /**
     * @description The value of the field.
     *
     * @example root
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The alias of the field.
     *
     * @example Logon Time
     *
     * @var string
     */
    public $filedAliasName;

    /**
     * @description The ID of the rule.
     *
     * @example 104037
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID of the server.
     *
     * @example rm-bp1e8t4q15sr3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the asset.
     *
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The operator. Valid values:
     *
     * - **contains**: contains
     * - **notContains**: does not contain
     * - **strEqual**: equals
     * - **strNotEqual**: does not equal
     * - **regex**: regular expression
     * @example contains
     *
     * @var string
     */
    public $operate;

    /**
     * @description The UUID of the asset.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'eventName'         => 'EventName',
        'eventNameOriginal' => 'EventNameOriginal',
        'eventType'         => 'EventType',
        'eventTypeOriginal' => 'EventTypeOriginal',
        'field'             => 'Field',
        'fieldValue'        => 'FieldValue',
        'filedAliasName'    => 'FiledAliasName',
        'id'                => 'Id',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'operate'           => 'Operate',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
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

        return $model;
    }
}
