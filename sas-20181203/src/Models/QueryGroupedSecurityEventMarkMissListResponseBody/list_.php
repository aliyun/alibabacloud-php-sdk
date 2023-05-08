<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupedSecurityEventMarkMissListResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The handling method. Valid values:
     *
     *   **1**: Automatically Added to Whitelist
     *   **2**: Defense Without Notification
     *
     * @example 31412647
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The alias of the field.
     *
     * @example auto_add_white
     *
     * @var string
     */
    public $disposalWay;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The handling method. Valid values:
     *
     *   **auto_add_white**: Automatically Added to Whitelist
     *   **defense_not_notification**: Defense Without Notification
     *
     * @example login_common_location
     *
     * @var string
     */
    public $eventNameOriginal;

    /**
     * @description The condition that is used to query alert events by asset. You can specify a value of the following types:
     *
     *   The IP address of the asset.
     *   The public IP address of the asset.
     *   The private IP address of the asset.
     *   The name of the asset.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example The source IP address of the request.
     *
     * @var string
     */
    public $eventTypeOriginal;

    /**
     * @description Unusual logon
     *
     * @example type
     *
     * @var string
     */
    public $field;

    /**
     * @description The name of the alert event. The value indicates a subtype.
     *
     * @example root
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example Logon Time
     *
     * @var string
     */
    public $filedAliasName;

    /**
     * @description The number of entries returned per page. Default value: **20**.
     *
     * @example contains
     *
     * @var string
     */
    public $operate;

    /**
     * @description The pagination information.
     *
     * @example 6985b88c-eb19-4d27-98ad-e4a42312****,5721d503-9b04-4243-89ca-1fb8ca5e****,db2678c3-10e3-4a20-92f1-265f6****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'disposalWay'       => 'DisposalWay',
        'eventName'         => 'EventName',
        'eventNameOriginal' => 'EventNameOriginal',
        'eventType'         => 'EventType',
        'eventTypeOriginal' => 'EventTypeOriginal',
        'field'             => 'Field',
        'fieldValue'        => 'FieldValue',
        'filedAliasName'    => 'FiledAliasName',
        'operate'           => 'Operate',
        'uuids'             => 'Uuids',
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
        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
