<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCompressFileDetectResultResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCompressFileDetectResultResponseBody\resultList;

class ListCompressFileDetectResultResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1                = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1                = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1++] = resultList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
