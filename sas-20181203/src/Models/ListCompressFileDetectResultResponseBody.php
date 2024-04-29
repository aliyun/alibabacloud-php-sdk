<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCompressFileDetectResultResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCompressFileDetectResultResponseBody\resultList;
use AlibabaCloud\Tea\Model;

class ListCompressFileDetectResultResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example E10BAF1C-A6C5-51E2-866C-76D5922E****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCompressFileDetectResultResponseBody
     */
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
                $n                 = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
