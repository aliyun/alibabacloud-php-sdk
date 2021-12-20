<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponse\paidDesktops;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponse\postPaidDesktops;
use AlibabaCloud\Tea\Model;

class DescribeDesktopsInGroupResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $paidDesktopsCount;

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
     * @var paidDesktops[]
     */
    public $paidDesktops;

    /**
     * @var postPaidDesktops[]
     */
    public $postPaidDesktops;
    protected $_name = [
        'nextToken'                   => 'NextToken',
        'paidDesktopsCount'           => 'PaidDesktopsCount',
        'postPaidDesktopsCount'       => 'PostPaidDesktopsCount',
        'postPaidDesktopsTotalAmount' => 'PostPaidDesktopsTotalAmount',
        'requestId'                   => 'RequestId',
        'paidDesktops'                => 'PaidDesktops',
        'postPaidDesktops'            => 'PostPaidDesktops',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('paidDesktopsCount', $this->paidDesktopsCount, true);
        Model::validateRequired('postPaidDesktopsCount', $this->postPaidDesktopsCount, true);
        Model::validateRequired('postPaidDesktopsTotalAmount', $this->postPaidDesktopsTotalAmount, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('paidDesktops', $this->paidDesktops, true);
        Model::validateRequired('postPaidDesktops', $this->postPaidDesktops, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->paidDesktopsCount) {
            $res['PaidDesktopsCount'] = $this->paidDesktopsCount;
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
        if (null !== $this->paidDesktops) {
            $res['PaidDesktops'] = [];
            if (null !== $this->paidDesktops && \is_array($this->paidDesktops)) {
                $n = 0;
                foreach ($this->paidDesktops as $item) {
                    $res['PaidDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopsInGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PaidDesktopsCount'])) {
            $model->paidDesktopsCount = $map['PaidDesktopsCount'];
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
        if (isset($map['PaidDesktops'])) {
            if (!empty($map['PaidDesktops'])) {
                $model->paidDesktops = [];
                $n                   = 0;
                foreach ($map['PaidDesktops'] as $item) {
                    $model->paidDesktops[$n++] = null !== $item ? paidDesktops::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
