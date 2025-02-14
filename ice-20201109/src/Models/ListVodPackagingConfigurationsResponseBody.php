<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListVodPackagingConfigurationsResponseBody extends Model
{
    /**
     * @var VodPackagingConfiguration[]
     */
    public $packagingConfigurations;
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
     * @var string
     */
    public $sortBy;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'packagingConfigurations' => 'PackagingConfigurations',
        'pageNo'                  => 'PageNo',
        'pageSize'                => 'PageSize',
        'requestId'               => 'RequestId',
        'sortBy'                  => 'SortBy',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->packagingConfigurations)) {
            Model::validateArray($this->packagingConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packagingConfigurations) {
            if (\is_array($this->packagingConfigurations)) {
                $res['PackagingConfigurations'] = [];
                $n1                             = 0;
                foreach ($this->packagingConfigurations as $item1) {
                    $res['PackagingConfigurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['PackagingConfigurations'])) {
            if (!empty($map['PackagingConfigurations'])) {
                $model->packagingConfigurations = [];
                $n1                             = 0;
                foreach ($map['PackagingConfigurations'] as $item1) {
                    $model->packagingConfigurations[$n1++] = VodPackagingConfiguration::fromMap($item1);
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

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
