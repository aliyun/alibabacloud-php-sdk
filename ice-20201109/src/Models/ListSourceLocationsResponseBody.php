<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListSourceLocationsResponseBody extends Model
{
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
     * @var ChannelAssemblySourceLocation[]
     */
    public $sourceLocationList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'sourceLocationList' => 'SourceLocationList',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sourceLocationList)) {
            Model::validateArray($this->sourceLocationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceLocationList) {
            if (\is_array($this->sourceLocationList)) {
                $res['SourceLocationList'] = [];
                $n1                        = 0;
                foreach ($this->sourceLocationList as $item1) {
                    $res['SourceLocationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceLocationList'])) {
            if (!empty($map['SourceLocationList'])) {
                $model->sourceLocationList = [];
                $n1                        = 0;
                foreach ($map['SourceLocationList'] as $item1) {
                    $model->sourceLocationList[$n1++] = ChannelAssemblySourceLocation::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
