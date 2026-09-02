<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListNetBandwidthResponseBody\netBandwidthList;

class ListNetBandwidthResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var netBandwidthList[]
     */
    public $netBandwidthList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'netBandwidthList' => 'NetBandwidthList',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->netBandwidthList)) {
            Model::validateArray($this->netBandwidthList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->netBandwidthList) {
            if (\is_array($this->netBandwidthList)) {
                $res['NetBandwidthList'] = [];
                $n1 = 0;
                foreach ($this->netBandwidthList as $item1) {
                    $res['NetBandwidthList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['NetBandwidthList'])) {
            if (!empty($map['NetBandwidthList'])) {
                $model->netBandwidthList = [];
                $n1 = 0;
                foreach ($map['NetBandwidthList'] as $item1) {
                    $model->netBandwidthList[$n1] = netBandwidthList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
