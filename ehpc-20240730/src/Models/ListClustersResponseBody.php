<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\ehpcVersionStatistics;

class ListClustersResponseBody extends Model
{
    /**
     * @var clusters[]
     */
    public $clusters;

    /**
     * @var ehpcVersionStatistics
     */
    public $ehpcVersionStatistics;

    /**
     * @var string
     */
    public $pageNumber;

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
        'clusters' => 'Clusters',
        'ehpcVersionStatistics' => 'EhpcVersionStatistics',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (null !== $this->ehpcVersionStatistics) {
            $this->ehpcVersionStatistics->validate();
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

        if (null !== $this->ehpcVersionStatistics) {
            $res['EhpcVersionStatistics'] = null !== $this->ehpcVersionStatistics ? $this->ehpcVersionStatistics->toArray($noStream) : $this->ehpcVersionStatistics;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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

        if (isset($map['EhpcVersionStatistics'])) {
            $model->ehpcVersionStatistics = ehpcVersionStatistics::fromMap($map['EhpcVersionStatistics']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
