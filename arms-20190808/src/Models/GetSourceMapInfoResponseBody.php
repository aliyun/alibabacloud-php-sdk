<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoResponseBody\sourceMapList;
use AlibabaCloud\Tea\Model;

class GetSourceMapInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceMapList[]
     */
    public $sourceMapList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'sourceMapList' => 'SourceMapList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceMapList) {
            $res['SourceMapList'] = [];
            if (null !== $this->sourceMapList && \is_array($this->sourceMapList)) {
                $n = 0;
                foreach ($this->sourceMapList as $item) {
                    $res['SourceMapList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSourceMapInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceMapList'])) {
            if (!empty($map['SourceMapList'])) {
                $model->sourceMapList = [];
                $n                    = 0;
                foreach ($map['SourceMapList'] as $item) {
                    $model->sourceMapList[$n++] = null !== $item ? sourceMapList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
