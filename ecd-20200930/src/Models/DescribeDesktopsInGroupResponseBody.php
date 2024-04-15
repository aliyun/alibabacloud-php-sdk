<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody\paidDesktops;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody\postPaidDesktops;
use AlibabaCloud\Tea\Model;

class DescribeDesktopsInGroupResponseBody extends Model
{
    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of subscription cloud computers that are in the Connected state.
     *
     * @example 100
     *
     * @var int
     */
    public $onlinePrePaidDesktopsCount;

    /**
     * @description The details about subscription cloud computers.
     *
     * @var paidDesktops[]
     */
    public $paidDesktops;

    /**
     * @description The total number of queried subscription cloud computers.
     *
     * @example 10
     *
     * @var int
     */
    public $paidDesktopsCount;

    /**
     * @description The details about pay-as-you-go cloud computers.
     *
     * @var postPaidDesktops[]
     */
    public $postPaidDesktops;

    /**
     * @description The total number of queried pay-as-you-go cloud computers.
     *
     * @example 10
     *
     * @var int
     */
    public $postPaidDesktopsCount;

    /**
     * @description The total amount of bills for pay-as-you-go cloud computers.
     *
     * @example 10000
     *
     * @var int
     */
    public $postPaidDesktopsTotalAmount;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of subscription cloud computers that are in the Running state.
     *
     * @example 100
     *
     * @var int
     */
    public $runningPrePaidDesktopsCount;

    /**
     * @description The number of subscription cloud computers that are in the Stopped state.
     *
     * @example 100
     *
     * @var int
     */
    public $stopedPrePaidDesktopsCount;

    /**
     * @description The number of subscription cloud computers that are in the Stopped state.
     *
     * @example 100
     *
     * @var int
     */
    public $stoppedPrePaidDesktopsCount;
    protected $_name = [
        'nextToken'                   => 'NextToken',
        'onlinePrePaidDesktopsCount'  => 'OnlinePrePaidDesktopsCount',
        'paidDesktops'                => 'PaidDesktops',
        'paidDesktopsCount'           => 'PaidDesktopsCount',
        'postPaidDesktops'            => 'PostPaidDesktops',
        'postPaidDesktopsCount'       => 'PostPaidDesktopsCount',
        'postPaidDesktopsTotalAmount' => 'PostPaidDesktopsTotalAmount',
        'requestId'                   => 'RequestId',
        'runningPrePaidDesktopsCount' => 'RunningPrePaidDesktopsCount',
        'stopedPrePaidDesktopsCount'  => 'StopedPrePaidDesktopsCount',
        'stoppedPrePaidDesktopsCount' => 'StoppedPrePaidDesktopsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->onlinePrePaidDesktopsCount) {
            $res['OnlinePrePaidDesktopsCount'] = $this->onlinePrePaidDesktopsCount;
        }
        if (null !== $this->paidDesktops) {
            $res['PaidDesktops'] = [];
            if (null !== $this->paidDesktops && \is_array($this->paidDesktops)) {
                $n = 0;
                foreach ($this->paidDesktops as $item) {
                    $res['PaidDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paidDesktopsCount) {
            $res['PaidDesktopsCount'] = $this->paidDesktopsCount;
        }
        if (null !== $this->postPaidDesktops) {
            $res['PostPaidDesktops'] = [];
            if (null !== $this->postPaidDesktops && \is_array($this->postPaidDesktops)) {
                $n = 0;
                foreach ($this->postPaidDesktops as $item) {
                    $res['PostPaidDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeDesktopsInGroupResponseBody
     */
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
                $n                   = 0;
                foreach ($map['PaidDesktops'] as $item) {
                    $model->paidDesktops[$n++] = null !== $item ? paidDesktops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PaidDesktopsCount'])) {
            $model->paidDesktopsCount = $map['PaidDesktopsCount'];
        }
        if (isset($map['PostPaidDesktops'])) {
            if (!empty($map['PostPaidDesktops'])) {
                $model->postPaidDesktops = [];
                $n                       = 0;
                foreach ($map['PostPaidDesktops'] as $item) {
                    $model->postPaidDesktops[$n++] = null !== $item ? postPaidDesktops::fromMap($item) : $item;
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
