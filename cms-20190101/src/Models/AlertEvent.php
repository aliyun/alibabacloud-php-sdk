<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\AlertEvent\metrics;

class AlertEvent extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertStatus;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $content;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $deDupId;

    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $product;

    /**
     * @var mixed[]
     */
    public $resourceInfo;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alertName' => 'AlertName',
        'alertStatus' => 'AlertStatus',
        'arn' => 'Arn',
        'content' => 'Content',
        'customLabels' => 'CustomLabels',
        'deDupId' => 'DeDupId',
        'details' => 'Details',
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'expression' => 'Expression',
        'metrics' => 'Metrics',
        'product' => 'Product',
        'resourceInfo' => 'ResourceInfo',
        'ruleName' => 'RuleName',
        'severity' => 'Severity',
        'source' => 'Source',
        'summary' => 'Summary',
        'timestamp' => 'Timestamp',
        'traceId' => 'TraceId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->resourceInfo)) {
            Model::validateArray($this->resourceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }

        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                foreach ($this->customLabels as $key1 => $value1) {
                    $res['CustomLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->deDupId) {
            $res['DeDupId'] = $this->deDupId;
        }

        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->resourceInfo) {
            if (\is_array($this->resourceInfo)) {
                $res['ResourceInfo'] = [];
                foreach ($this->resourceInfo as $key1 => $value1) {
                    $res['ResourceInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }

        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                foreach ($map['CustomLabels'] as $key1 => $value1) {
                    $model->customLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['DeDupId'])) {
            $model->deDupId = $map['DeDupId'];
        }

        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['ResourceInfo'])) {
            if (!empty($map['ResourceInfo'])) {
                $model->resourceInfo = [];
                foreach ($map['ResourceInfo'] as $key1 => $value1) {
                    $model->resourceInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
