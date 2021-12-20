<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePostPaidDesktopBillsResponse\bills;
use AlibabaCloud\Tea\Model;

class DescribePostPaidDesktopBillsResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $postPaidDesktopsBillsUrl;

    /**
     * @var int
     */
    public $postPaidDesktopsCount;

    /**
     * @var float
     */
    public $postPaidDesktopsTotalAmount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bills[]
     */
    public $bills;
    protected $_name = [
        'nextToken'                   => 'NextToken',
        'postPaidDesktopsBillsUrl'    => 'PostPaidDesktopsBillsUrl',
        'postPaidDesktopsCount'       => 'PostPaidDesktopsCount',
        'postPaidDesktopsTotalAmount' => 'PostPaidDesktopsTotalAmount',
        'requestId'                   => 'RequestId',
        'bills'                       => 'Bills',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('postPaidDesktopsBillsUrl', $this->postPaidDesktopsBillsUrl, true);
        Model::validateRequired('postPaidDesktopsCount', $this->postPaidDesktopsCount, true);
        Model::validateRequired('postPaidDesktopsTotalAmount', $this->postPaidDesktopsTotalAmount, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bills', $this->bills, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->postPaidDesktopsBillsUrl) {
            $res['PostPaidDesktopsBillsUrl'] = $this->postPaidDesktopsBillsUrl;
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
     * @return DescribePostPaidDesktopBillsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PostPaidDesktopsBillsUrl'])) {
            $model->postPaidDesktopsBillsUrl = $map['PostPaidDesktopsBillsUrl'];
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
