<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListResponseBody\AIConfigList;
use AlibabaCloud\Tea\Model;

class DescribeAIConfigListResponseBody extends Model
{
    /**
     * @var AIConfigList
     */
    public $AIConfigList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIConfigList' => 'AIConfigList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIConfigList) {
            $res['AIConfigList'] = null !== $this->AIConfigList ? $this->AIConfigList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAIConfigListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIConfigList'])) {
            $model->AIConfigList = AIConfigList::fromMap($map['AIConfigList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
