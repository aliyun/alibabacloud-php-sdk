<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody\batchList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody\pageInfo;

class ListPublishBatchResponseBody extends Model
{
    /**
     * @var batchList[]
     */
    public $batchList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batchList' => 'BatchList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->batchList)) {
            Model::validateArray($this->batchList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchList) {
            if (\is_array($this->batchList)) {
                $res['BatchList'] = [];
                $n1 = 0;
                foreach ($this->batchList as $item1) {
                    $res['BatchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BatchList'])) {
            if (!empty($map['BatchList'])) {
                $model->batchList = [];
                $n1 = 0;
                foreach ($map['BatchList'] as $item1) {
                    $model->batchList[$n1] = batchList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
