<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewayQuotaRuleSubjectUsageExportTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $filterFailedRequests;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clientToken' => 'clientToken',
        'endTime' => 'endTime',
        'filterFailedRequests' => 'filterFailedRequests',
        'format' => 'format',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->filterFailedRequests) {
            $res['filterFailedRequests'] = $this->filterFailedRequests;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['filterFailedRequests'])) {
            $model->filterFailedRequests = $map['filterFailedRequests'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
