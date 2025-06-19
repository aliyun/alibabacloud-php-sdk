<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class CatalogSummaryTrend extends Model
{
    /**
     * @var DateSummary[]
     */
    public $apiVisitCount;

    /**
     * @var DateSummary[]
     */
    public $throughput;

    /**
     * @var DateSummary[]
     */
    public $totalFileCount;

    /**
     * @var DateSummary[]
     */
    public $totalFileSizeInBytes;

    /**
     * @var DateSummary[]
     */
    public $totalMetaCount;
    protected $_name = [
        'apiVisitCount' => 'apiVisitCount',
        'throughput' => 'throughput',
        'totalFileCount' => 'totalFileCount',
        'totalFileSizeInBytes' => 'totalFileSizeInBytes',
        'totalMetaCount' => 'totalMetaCount',
    ];

    public function validate()
    {
        if (\is_array($this->apiVisitCount)) {
            Model::validateArray($this->apiVisitCount);
        }
        if (\is_array($this->throughput)) {
            Model::validateArray($this->throughput);
        }
        if (\is_array($this->totalFileCount)) {
            Model::validateArray($this->totalFileCount);
        }
        if (\is_array($this->totalFileSizeInBytes)) {
            Model::validateArray($this->totalFileSizeInBytes);
        }
        if (\is_array($this->totalMetaCount)) {
            Model::validateArray($this->totalMetaCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVisitCount) {
            if (\is_array($this->apiVisitCount)) {
                $res['apiVisitCount'] = [];
                $n1 = 0;
                foreach ($this->apiVisitCount as $item1) {
                    $res['apiVisitCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->throughput) {
            if (\is_array($this->throughput)) {
                $res['throughput'] = [];
                $n1 = 0;
                foreach ($this->throughput as $item1) {
                    $res['throughput'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalFileCount) {
            if (\is_array($this->totalFileCount)) {
                $res['totalFileCount'] = [];
                $n1 = 0;
                foreach ($this->totalFileCount as $item1) {
                    $res['totalFileCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalFileSizeInBytes) {
            if (\is_array($this->totalFileSizeInBytes)) {
                $res['totalFileSizeInBytes'] = [];
                $n1 = 0;
                foreach ($this->totalFileSizeInBytes as $item1) {
                    $res['totalFileSizeInBytes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalMetaCount) {
            if (\is_array($this->totalMetaCount)) {
                $res['totalMetaCount'] = [];
                $n1 = 0;
                foreach ($this->totalMetaCount as $item1) {
                    $res['totalMetaCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['apiVisitCount'])) {
            if (!empty($map['apiVisitCount'])) {
                $model->apiVisitCount = [];
                $n1 = 0;
                foreach ($map['apiVisitCount'] as $item1) {
                    $model->apiVisitCount[$n1] = DateSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['throughput'])) {
            if (!empty($map['throughput'])) {
                $model->throughput = [];
                $n1 = 0;
                foreach ($map['throughput'] as $item1) {
                    $model->throughput[$n1] = DateSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalFileCount'])) {
            if (!empty($map['totalFileCount'])) {
                $model->totalFileCount = [];
                $n1 = 0;
                foreach ($map['totalFileCount'] as $item1) {
                    $model->totalFileCount[$n1] = DateSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalFileSizeInBytes'])) {
            if (!empty($map['totalFileSizeInBytes'])) {
                $model->totalFileSizeInBytes = [];
                $n1 = 0;
                foreach ($map['totalFileSizeInBytes'] as $item1) {
                    $model->totalFileSizeInBytes[$n1] = DateSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalMetaCount'])) {
            if (!empty($map['totalMetaCount'])) {
                $model->totalMetaCount = [];
                $n1 = 0;
                foreach ($map['totalMetaCount'] as $item1) {
                    $model->totalMetaCount[$n1] = DateSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
