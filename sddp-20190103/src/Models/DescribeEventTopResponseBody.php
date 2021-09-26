<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTopResponseBody\dataCountList;
use AlibabaCloud\Tea\Model;

class DescribeEventTopResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dataCountList[]
     */
    public $dataCountList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'dataCountList' => 'DataCountList',
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
        if (null !== $this->dataCountList) {
            $res['DataCountList'] = [];
            if (null !== $this->dataCountList && \is_array($this->dataCountList)) {
                $n = 0;
                foreach ($this->dataCountList as $item) {
                    $res['DataCountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventTopResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataCountList'])) {
            if (!empty($map['DataCountList'])) {
                $model->dataCountList = [];
                $n                    = 0;
                foreach ($map['DataCountList'] as $item) {
                    $model->dataCountList[$n++] = null !== $item ? dataCountList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
