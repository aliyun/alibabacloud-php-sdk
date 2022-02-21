<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeAIEventListResponseBody extends Model
{
    /**
     * @var string
     */
    public $AIEventList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIEventList' => 'AIEventList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIEventList) {
            $res['AIEventList'] = $this->AIEventList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAIEventListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIEventList'])) {
            $model->AIEventList = $map['AIEventList'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
