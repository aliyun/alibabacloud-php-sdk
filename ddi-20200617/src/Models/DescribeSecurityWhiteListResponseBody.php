<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeSecurityWhiteListResponseBody\describeSecurityWhiteList;
use AlibabaCloud\Tea\Model;

class DescribeSecurityWhiteListResponseBody extends Model
{
    /**
     * @var describeSecurityWhiteList[]
     */
    public $describeSecurityWhiteList;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeSecurityWhiteList' => 'DescribeSecurityWhiteList',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeSecurityWhiteList) {
            $res['DescribeSecurityWhiteList'] = [];
            if (null !== $this->describeSecurityWhiteList && \is_array($this->describeSecurityWhiteList)) {
                $n = 0;
                foreach ($this->describeSecurityWhiteList as $item) {
                    $res['DescribeSecurityWhiteList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeSecurityWhiteList'])) {
            if (!empty($map['DescribeSecurityWhiteList'])) {
                $model->describeSecurityWhiteList = [];
                $n                                = 0;
                foreach ($map['DescribeSecurityWhiteList'] as $item) {
                    $model->describeSecurityWhiteList[$n++] = null !== $item ? describeSecurityWhiteList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
