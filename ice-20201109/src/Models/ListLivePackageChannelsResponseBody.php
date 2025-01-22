<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelsResponseBody\livePackageChannels;

class ListLivePackageChannelsResponseBody extends Model
{
    /**
     * @var livePackageChannels[]
     */
    public $livePackageChannels;
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
        'livePackageChannels' => 'LivePackageChannels',
        'pageNo'              => 'PageNo',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'sortBy'              => 'SortBy',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->livePackageChannels)) {
            Model::validateArray($this->livePackageChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePackageChannels) {
            if (\is_array($this->livePackageChannels)) {
                $res['LivePackageChannels'] = [];
                $n1                         = 0;
                foreach ($this->livePackageChannels as $item1) {
                    $res['LivePackageChannels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LivePackageChannels'])) {
            if (!empty($map['LivePackageChannels'])) {
                $model->livePackageChannels = [];
                $n1                         = 0;
                foreach ($map['LivePackageChannels'] as $item1) {
                    $model->livePackageChannels[$n1++] = livePackageChannels::fromMap($item1);
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
