<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiagnoseReportResponseBody\reports;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $recommendAction;

    /**
     * @var string
     */
    public $recommendParams;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'description' => 'Description',
        'eventName' => 'EventName',
        'recommendAction' => 'RecommendAction',
        'recommendParams' => 'RecommendParams',
        'severity' => 'Severity',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->recommendAction) {
            $res['RecommendAction'] = $this->recommendAction;
        }

        if (null !== $this->recommendParams) {
            $res['RecommendParams'] = $this->recommendParams;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['RecommendAction'])) {
            $model->recommendAction = $map['RecommendAction'];
        }

        if (isset($map['RecommendParams'])) {
            $model->recommendParams = $map['RecommendParams'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
