<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example [{\"condition\": \"MD5\", \"type\": \"equals\", \"value\": \"0083a31cc0083a31ccf7c10367a6e783e\"}]
     *
     * @var string
     */
    public $conditions;

    /**
     * @example PEM
     *
     * @var string
     */
    public $eventKey;

    /**
     * @example PEM
     *
     * @var string
     */
    public $eventName;

    /**
     * @example sensitiveFile
     *
     * @var string
     */
    public $eventType;

    /**
     * @example 2646624
     *
     * @var int
     */
    public $id;

    /**
     * @example whitelist
     *
     * @var string
     */
    public $operationCode;

    /**
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
