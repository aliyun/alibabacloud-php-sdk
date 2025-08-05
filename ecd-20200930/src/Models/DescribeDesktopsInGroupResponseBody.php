<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody\paidDesktops;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody\postPaidDesktops;

class DescribeDesktopsInGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $onlinePrePaidDesktopsCount;

    /**
     * @var paidDesktops[]
     */
    public $paidDesktops;

    /**
     * @var int
     */
    public $paidDesktopsCount;

    /**
     * @var postPaidDesktops[]
     */
    public $postPaidDesktops;

    /**
     * @var int
     */
    public $postPaidDesktopsCount;

    /**
     * @var int
     */
    public $postPaidDesktopsTotalAmount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $runningPrePaidDesktopsCount;

    /**
     * @var int
     */
    public $stopedPrePaidDesktopsCount;

    /**
     * @var int
     */
    public $stoppedPrePaidDesktopsCount;
    protected $_name = [
        'nextToken' => 'NextToken',
        'onlinePrePaidDesktopsCount' => 'OnlinePrePaidDesktopsCount',
        'paidDesktops' => 'PaidDesktops',
        'paidDesktopsCount' => 'PaidDesktopsCount',
        'postPaidDesktops' => 'PostPaidDesktops',
        'postPaidDesktopsCount' => 'PostPaidDesktopsCount',
        'postPaidDesktopsTotalAmount' => 'PostPaidDesktopsTotalAmount',
        'requestId' => 'RequestId',
        'runningPrePaidDesktopsCount' => 'RunningPrePaidDesktopsCount',
        'stopedPrePaidDesktopsCount' => 'StopedPrePaidDesktopsCount',
        'stoppedPrePaidDesktopsCount' => 'StoppedPrePaidDesktopsCount',
    ];

    public function validate()
    {
        if (\is_array($this->paidDesktops)) {
            Model::validateArray($this->paidDesktops);
        }
        if (\is_array($this->postPaidDesktops)) {
            Model::validateArray($this->postPaidDesktops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->onlinePrePaidDesktopsCount) {
            $res['OnlinePrePaidDesktopsCount'] = $this->onlinePrePaidDesktopsCount;
        }

        if (null !== $this->paidDesktops) {
            if (\is_array($this->paidDesktops)) {
                $res['PaidDesktops'] = [];
                $n1 = 0;
                foreach ($this->paidDesktops as $item1) {
                    $res['PaidDesktops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paidDesktopsCount) {
            $res['PaidDesktopsCount'] = $this->paidDesktopsCount;
        }

        if (null !== $this->postPaidDesktops) {
            if (\is_array($this->postPaidDesktops)) {
                $res['PostPaidDesktops'] = [];
                $n1 = 0;
                foreach ($this->postPaidDesktops as $item1) {
                    $res['PostPaidDesktops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->postPaidDesktopsCount) {
            $res['PostPaidDesktopsCount'] = $this->postPaidDesktopsCount;
        }

        if (null !== $this->postPaidDesktopsTotalAmount) {
            $res['PostPaidDesktopsTotalAmount'] = $this->postPaidDesktopsTotalAmount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runningPrePaidDesktopsCount) {
            $res['RunningPrePaidDesktopsCount'] = $this->runningPrePaidDesktopsCount;
        }

        if (null !== $this->stopedPrePaidDesktopsCount) {
            $res['StopedPrePaidDesktopsCount'] = $this->stopedPrePaidDesktopsCount;
        }

        if (null !== $this->stoppedPrePaidDesktopsCount) {
            $res['StoppedPrePaidDesktopsCount'] = $this->stoppedPrePaidDesktopsCount;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OnlinePrePaidDesktopsCount'])) {
            $model->onlinePrePaidDesktopsCount = $map['OnlinePrePaidDesktopsCount'];
        }

        if (isset($map['PaidDesktops'])) {
            if (!empty($map['PaidDesktops'])) {
                $model->paidDesktops = [];
                $n1 = 0;
                foreach ($map['PaidDesktops'] as $item1) {
                    $model->paidDesktops[$n1] = paidDesktops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PaidDesktopsCount'])) {
            $model->paidDesktopsCount = $map['PaidDesktopsCount'];
        }

        if (isset($map['PostPaidDesktops'])) {
            if (!empty($map['PostPaidDesktops'])) {
                $model->postPaidDesktops = [];
                $n1 = 0;
                foreach ($map['PostPaidDesktops'] as $item1) {
                    $model->postPaidDesktops[$n1] = postPaidDesktops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PostPaidDesktopsCount'])) {
            $model->postPaidDesktopsCount = $map['PostPaidDesktopsCount'];
        }

        if (isset($map['PostPaidDesktopsTotalAmount'])) {
            $model->postPaidDesktopsTotalAmount = $map['PostPaidDesktopsTotalAmount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunningPrePaidDesktopsCount'])) {
            $model->runningPrePaidDesktopsCount = $map['RunningPrePaidDesktopsCount'];
        }

        if (isset($map['StopedPrePaidDesktopsCount'])) {
            $model->stopedPrePaidDesktopsCount = $map['StopedPrePaidDesktopsCount'];
        }

        if (isset($map['StoppedPrePaidDesktopsCount'])) {
            $model->stoppedPrePaidDesktopsCount = $map['StoppedPrePaidDesktopsCount'];
        }

        return $model;
    }
}
