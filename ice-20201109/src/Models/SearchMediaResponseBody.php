<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;
use AlibabaCloud\Tea\Model;

class SearchMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mediaInfoList[]
     */
    public $mediaInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'          => 'Code',
        'mediaInfoList' => 'MediaInfoList',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'total'         => 'Total',
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
        if (null !== $this->mediaInfoList) {
            $res['MediaInfoList'] = [];
            if (null !== $this->mediaInfoList && \is_array($this->mediaInfoList)) {
                $n = 0;
                foreach ($this->mediaInfoList as $item) {
                    $res['MediaInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return SearchMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MediaInfoList'])) {
            if (!empty($map['MediaInfoList'])) {
                $model->mediaInfoList = [];
                $n                    = 0;
                foreach ($map['MediaInfoList'] as $item) {
                    $model->mediaInfoList[$n++] = null !== $item ? mediaInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
