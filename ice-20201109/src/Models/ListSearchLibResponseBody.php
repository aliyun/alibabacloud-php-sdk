<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody\searchLibInfoList;
use AlibabaCloud\Tea\Model;

class ListSearchLibResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The request ID.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Information about search libraries.
     *
     * @var searchLibInfoList[]
     */
    public $searchLibInfoList;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description 总数。
     *
     * @example 8
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'              => 'Code',
        'requestId'         => 'RequestId',
        'searchLibInfoList' => 'SearchLibInfoList',
        'success'           => 'Success',
        'total'             => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->searchLibInfoList) {
            $res['SearchLibInfoList'] = [];
            if (null !== $this->searchLibInfoList && \is_array($this->searchLibInfoList)) {
                $n = 0;
                foreach ($this->searchLibInfoList as $item) {
                    $res['SearchLibInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SearchLibInfoList'])) {
            if (!empty($map['SearchLibInfoList'])) {
                $model->searchLibInfoList = [];
                $n                        = 0;
                foreach ($map['SearchLibInfoList'] as $item) {
                    $model->searchLibInfoList[$n++] = null !== $item ? searchLibInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
