<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamMonitorListResponseBody\liveStreamMonitorList;

class DescribeLiveStreamMonitorListResponseBody extends Model
{
    /**
     * @var liveStreamMonitorList[]
     */
    public $liveStreamMonitorList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'liveStreamMonitorList' => 'LiveStreamMonitorList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->liveStreamMonitorList)) {
            Model::validateArray($this->liveStreamMonitorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveStreamMonitorList) {
            if (\is_array($this->liveStreamMonitorList)) {
                $res['LiveStreamMonitorList'] = [];
                $n1 = 0;
                foreach ($this->liveStreamMonitorList as $item1) {
                    $res['LiveStreamMonitorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['LiveStreamMonitorList'])) {
            if (!empty($map['LiveStreamMonitorList'])) {
                $model->liveStreamMonitorList = [];
                $n1 = 0;
                foreach ($map['LiveStreamMonitorList'] as $item1) {
                    $model->liveStreamMonitorList[$n1] = liveStreamMonitorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
