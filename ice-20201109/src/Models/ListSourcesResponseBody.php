<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListSourcesResponseBody extends Model
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
     * @var ChannelAssemblySource[]
     */
    public $sourceList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'sourceList' => 'SourceList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sourceList)) {
            Model::validateArray($this->sourceList);
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

        if (null !== $this->sourceList) {
            if (\is_array($this->sourceList)) {
                $res['SourceList'] = [];
                $n1                = 0;
                foreach ($this->sourceList as $item1) {
                    $res['SourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SourceList'])) {
            if (!empty($map['SourceList'])) {
                $model->sourceList = [];
                $n1                = 0;
                foreach ($map['SourceList'] as $item1) {
                    $model->sourceList[$n1++] = ChannelAssemblySource::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
