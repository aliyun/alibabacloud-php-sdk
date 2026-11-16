<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineOverviewResponseBody\handleStatusCounts;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineOverviewResponseBody\riskCounts;

class DescribeAiEngineOverviewResponseBody extends Model
{
    /**
     * @var int
     */
    public $analyzedRequestCount;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var handleStatusCounts
     */
    public $handleStatusCounts;

    /**
     * @var int
     */
    public $protectedGroupCount;

    /**
     * @var int
     */
    public $protectedResourceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskCounts
     */
    public $riskCounts;
    protected $_name = [
        'analyzedRequestCount' => 'AnalyzedRequestCount',
        'eventCount' => 'EventCount',
        'handleStatusCounts' => 'HandleStatusCounts',
        'protectedGroupCount' => 'ProtectedGroupCount',
        'protectedResourceCount' => 'ProtectedResourceCount',
        'requestId' => 'RequestId',
        'riskCounts' => 'RiskCounts',
    ];

    public function validate()
    {
        if (null !== $this->handleStatusCounts) {
            $this->handleStatusCounts->validate();
        }
        if (null !== $this->riskCounts) {
            $this->riskCounts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analyzedRequestCount) {
            $res['AnalyzedRequestCount'] = $this->analyzedRequestCount;
        }

        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }

        if (null !== $this->handleStatusCounts) {
            $res['HandleStatusCounts'] = null !== $this->handleStatusCounts ? $this->handleStatusCounts->toArray($noStream) : $this->handleStatusCounts;
        }

        if (null !== $this->protectedGroupCount) {
            $res['ProtectedGroupCount'] = $this->protectedGroupCount;
        }

        if (null !== $this->protectedResourceCount) {
            $res['ProtectedResourceCount'] = $this->protectedResourceCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskCounts) {
            $res['RiskCounts'] = null !== $this->riskCounts ? $this->riskCounts->toArray($noStream) : $this->riskCounts;
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
        if (isset($map['AnalyzedRequestCount'])) {
            $model->analyzedRequestCount = $map['AnalyzedRequestCount'];
        }

        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }

        if (isset($map['HandleStatusCounts'])) {
            $model->handleStatusCounts = handleStatusCounts::fromMap($map['HandleStatusCounts']);
        }

        if (isset($map['ProtectedGroupCount'])) {
            $model->protectedGroupCount = $map['ProtectedGroupCount'];
        }

        if (isset($map['ProtectedResourceCount'])) {
            $model->protectedResourceCount = $map['ProtectedResourceCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskCounts'])) {
            $model->riskCounts = riskCounts::fromMap($map['RiskCounts']);
        }

        return $model;
    }
}
