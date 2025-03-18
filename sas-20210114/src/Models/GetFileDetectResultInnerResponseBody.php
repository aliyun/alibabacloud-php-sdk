<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\SDK\Sas\V20210114\Models\GetFileDetectResultInnerResponseBody\resultList;
use AlibabaCloud\Tea\Model;

class GetFileDetectResultInnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultList' => 'ResultList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return GetFileDetectResultInnerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
