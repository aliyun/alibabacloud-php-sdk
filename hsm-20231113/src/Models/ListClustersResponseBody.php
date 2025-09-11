<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListClustersResponseBody\clusters;

class ListClustersResponseBody extends Model
{
    /**
     * @var clusters[]
     */
    public $clusters;

    /**
     * @var int
     */
    public $currentPage;

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
    public $total;
    protected $_name = [
        'clusters' => 'Clusters',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['Clusters'] = [];
                $n1 = 0;
                foreach ($this->clusters as $item1) {
                    $res['Clusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n1 = 0;
                foreach ($map['Clusters'] as $item1) {
                    $model->clusters[$n1] = clusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
