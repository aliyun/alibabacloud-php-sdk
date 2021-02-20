<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeListSessionsResponseBody\sessions;
use AlibabaCloud\Tea\Model;

class DescribeListSessionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $currentPage;

    /**
     * @var sessions[]
     */
    public $sessions;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'currentPage' => 'CurrentPage',
        'sessions'    => 'Sessions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeListSessionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
