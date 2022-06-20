<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupedSecurityEventMarkMissListResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 用户统一编号
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description 处置方式
     *
     * @var string
     */
    public $disposalWay;

    /**
     * @description 告警事件名称（子类型）
     *
     * @var string
     */
    public $eventName;

    /**
     * @description 告警事件名称（子类型）
     *
     * @var string
     */
    public $eventNameOriginal;

    /**
     * @description 告警事件名称（父类型）
     *
     * @var string
     */
    public $eventType;

    /**
     * @description 告警事件名称（父类型）
     *
     * @var string
     */
    public $eventTypeOriginal;

    /**
     * @description 加白字段
     *
     * @var string
     */
    public $field;

    /**
     * @description 加白值
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description 加白字段别名
     *
     * @var string
     */
    public $filedAliasName;

    /**
     * @description 操作符
     *
     * @var string
     */
    public $operate;

    /**
     * @description 资产ids，逗号分割
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
