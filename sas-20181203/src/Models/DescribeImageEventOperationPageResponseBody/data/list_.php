<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The rule conditions. The value is in the JSON format. Valid values of keys:
     *
     *   **condition**: the matching condition.
     *   **type**: the matching type.
     *   **value**: the matching value.
     *
     * @example [{\"condition\": \"MD5\", \"type\": \"equals\", \"value\": \"0083a31cc0083a31ccf7c10367a6e783e\"}]
     *
     * @var string
     */
    public $conditions;

    /**
     * @description The keyword of the alert item.
     *
     * @example PEM
     *
     * @var string
     */
    public $eventKey;

    /**
     * @description The name of the alert item.
     *
     * @example PEM
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The alert type.
     *
     *   Only **sensitiveFile** may be returned.
     *
     * @example sensitiveFile
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The primary key of the alert handling rule.
     *
     * @example 2646624
     *
     * @var int
     */
    public $id;

    /**
     * @description The operation code.
     *
     *   Only **whitelist** may be returned, which means that the alert item is added to the whitelist.
     *
     * @example whitelist
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The application scope of the rule. The value is in the JSON format. Valid values of keys:
     *
     *   **type**
     *   **value**
     *
     * @example {\"type\": \"repo\", \"value\": \"test-aaa/shenzhen-repo-01\"}
     *
     * @var string
     */
    public $scenarios;
    protected $_name = [
        'conditions'    => 'Conditions',
        'eventKey'      => 'EventKey',
        'eventName'     => 'EventName',
        'eventType'     => 'EventType',
        'id'            => 'Id',
        'operationCode' => 'OperationCode',
        'scenarios'     => 'Scenarios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
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
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }
        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }

        return $model;
    }
}
