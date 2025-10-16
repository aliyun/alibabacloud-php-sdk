<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAckClusterConnectorsResponseBody\ackClusterConnectors;

class DescribeAckClusterConnectorsResponseBody extends Model
{
    /**
     * @var ackClusterConnectors[]
     */
    public $ackClusterConnectors;

    /**
     * @var int
     */
    public $pageNo;

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
    public $totalCount;
    protected $_name = [
        'ackClusterConnectors' => 'AckClusterConnectors',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ackClusterConnectors)) {
            Model::validateArray($this->ackClusterConnectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackClusterConnectors) {
            if (\is_array($this->ackClusterConnectors)) {
                $res['AckClusterConnectors'] = [];
                $n1 = 0;
                foreach ($this->ackClusterConnectors as $item1) {
                    $res['AckClusterConnectors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AckClusterConnectors'])) {
            if (!empty($map['AckClusterConnectors'])) {
                $model->ackClusterConnectors = [];
                $n1 = 0;
                foreach ($map['AckClusterConnectors'] as $item1) {
                    $model->ackClusterConnectors[$n1] = ackClusterConnectors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
