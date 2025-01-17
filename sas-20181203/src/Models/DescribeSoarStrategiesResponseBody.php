<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategiesResponseBody\soarStrategies;

class DescribeSoarStrategiesResponseBody extends Model
{
    /**
     * @var int
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
     * @var soarStrategies[]
     */
    public $soarStrategies;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'soarStrategies' => 'SoarStrategies',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->soarStrategies)) {
            Model::validateArray($this->soarStrategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->soarStrategies) {
            if (\is_array($this->soarStrategies)) {
                $res['SoarStrategies'] = [];
                $n1                    = 0;
                foreach ($this->soarStrategies as $item1) {
                    $res['SoarStrategies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SoarStrategies'])) {
            if (!empty($map['SoarStrategies'])) {
                $model->soarStrategies = [];
                $n1                    = 0;
                foreach ($map['SoarStrategies'] as $item1) {
                    $model->soarStrategies[$n1++] = soarStrategies::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
