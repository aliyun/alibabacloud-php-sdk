<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePostPaidDesktopBillsResponseBody\bills;
use AlibabaCloud\Tea\Model;

class DescribePostPaidDesktopBillsResponseBody extends Model
{
    /**
     * @var string
     */
    public $postPaidDesktopsBillsUrl;

    /**
     * @var int
     */
    public $postPaidDesktopsCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $postPaidDesktopsTotalAmount;

    /**
     * @var bills[]
     */
    public $bills;
    protected $_name = [
        'postPaidDesktopsBillsUrl'    => 'PostPaidDesktopsBillsUrl',
        'postPaidDesktopsCount'       => 'PostPaidDesktopsCount',
        'nextToken'                   => 'NextToken',
        'requestId'                   => 'RequestId',
        'postPaidDesktopsTotalAmount' => 'PostPaidDesktopsTotalAmount',
        'bills'                       => 'Bills',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postPaidDesktopsBillsUrl) {
            $res['PostPaidDesktopsBillsUrl'] = $this->postPaidDesktopsBillsUrl;
        }
        if (null !== $this->postPaidDesktopsCount) {
            $res['PostPaidDesktopsCount'] = $this->postPaidDesktopsCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->postPaidDesktopsTotalAmount) {
            $res['PostPaidDesktopsTotalAmount'] = $this->postPaidDesktopsTotalAmount;
        }
        if (null !== $this->bills) {
            $res['Bills'] = [];
            if (null !== $this->bills && \is_array($this->bills)) {
                $n = 0;
                foreach ($this->bills as $item) {
                    $res['Bills'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostPaidDesktopBillsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostPaidDesktopsBillsUrl'])) {
            $model->postPaidDesktopsBillsUrl = $map['PostPaidDesktopsBillsUrl'];
        }
        if (isset($map['PostPaidDesktopsCount'])) {
            $model->postPaidDesktopsCount = $map['PostPaidDesktopsCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PostPaidDesktopsTotalAmount'])) {
            $model->postPaidDesktopsTotalAmount = $map['PostPaidDesktopsTotalAmount'];
        }
        if (isset($map['Bills'])) {
            if (!empty($map['Bills'])) {
                $model->bills = [];
                $n            = 0;
                foreach ($map['Bills'] as $item) {
                    $model->bills[$n++] = null !== $item ? bills::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
