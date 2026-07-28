<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody\dailyUsage;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody\modelUsage;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody\sessionSummary;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody\skillUsage;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationUsageResponseBody\summary;

class DescribeApplicationUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var dailyUsage[]
     */
    public $dailyUsage;

    /**
     * @var int
     */
    public $days;

    /**
     * @var string
     */
    public $message;

    /**
     * @var modelUsage[]
     */
    public $modelUsage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sessionSummary
     */
    public $sessionSummary;

    /**
     * @var skillUsage
     */
    public $skillUsage;

    /**
     * @var summary
     */
    public $summary;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'dailyUsage' => 'DailyUsage',
        'days' => 'Days',
        'message' => 'Message',
        'modelUsage' => 'ModelUsage',
        'requestId' => 'RequestId',
        'sessionSummary' => 'SessionSummary',
        'skillUsage' => 'SkillUsage',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (\is_array($this->dailyUsage)) {
            Model::validateArray($this->dailyUsage);
        }
        if (\is_array($this->modelUsage)) {
            Model::validateArray($this->modelUsage);
        }
        if (null !== $this->sessionSummary) {
            $this->sessionSummary->validate();
        }
        if (null !== $this->skillUsage) {
            $this->skillUsage->validate();
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dailyUsage) {
            if (\is_array($this->dailyUsage)) {
                $res['DailyUsage'] = [];
                $n1 = 0;
                foreach ($this->dailyUsage as $item1) {
                    $res['DailyUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->modelUsage) {
            if (\is_array($this->modelUsage)) {
                $res['ModelUsage'] = [];
                $n1 = 0;
                foreach ($this->modelUsage as $item1) {
                    $res['ModelUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionSummary) {
            $res['SessionSummary'] = null !== $this->sessionSummary ? $this->sessionSummary->toArray($noStream) : $this->sessionSummary;
        }

        if (null !== $this->skillUsage) {
            $res['SkillUsage'] = null !== $this->skillUsage ? $this->skillUsage->toArray($noStream) : $this->skillUsage;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DailyUsage'])) {
            if (!empty($map['DailyUsage'])) {
                $model->dailyUsage = [];
                $n1 = 0;
                foreach ($map['DailyUsage'] as $item1) {
                    $model->dailyUsage[$n1] = dailyUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ModelUsage'])) {
            if (!empty($map['ModelUsage'])) {
                $model->modelUsage = [];
                $n1 = 0;
                foreach ($map['ModelUsage'] as $item1) {
                    $model->modelUsage[$n1] = modelUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SessionSummary'])) {
            $model->sessionSummary = sessionSummary::fromMap($map['SessionSummary']);
        }

        if (isset($map['SkillUsage'])) {
            $model->skillUsage = skillUsage::fromMap($map['SkillUsage']);
        }

        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        return $model;
    }
}
