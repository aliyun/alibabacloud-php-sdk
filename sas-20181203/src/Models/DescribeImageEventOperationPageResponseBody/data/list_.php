<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $conditions;
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
    public $eventType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $operationCode;
    /**
     * @var string
     */
    public $scenarios;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'conditions'    => 'Conditions',
        'eventKey'      => 'EventKey',
        'eventName'     => 'EventName',
        'eventType'     => 'EventType',
        'id'            => 'Id',
        'note'          => 'Note',
        'operationCode' => 'OperationCode',
        'scenarios'     => 'Scenarios',
        'source'        => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }

        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
