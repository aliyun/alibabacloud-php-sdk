<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogStatisticsResponseBody\countList;
use AlibabaCloud\Tea\Model;

class GetLogStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var countList[]
     */
    public $countList;
    protected $_name = [
        'requestId' => 'RequestId',
        'countList' => 'CountList',
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
        if (null !== $this->countList) {
            $res['CountList'] = [];
            if (null !== $this->countList && \is_array($this->countList)) {
                $n = 0;
                foreach ($this->countList as $item) {
                    $res['CountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CountList'])) {
            if (!empty($map['CountList'])) {
                $model->countList = [];
                $n                = 0;
                foreach ($map['CountList'] as $item) {
                    $model->countList[$n++] = null !== $item ? countList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
