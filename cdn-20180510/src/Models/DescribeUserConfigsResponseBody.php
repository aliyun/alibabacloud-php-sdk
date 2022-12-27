<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs;
use AlibabaCloud\Tea\Model;

class DescribeUserConfigsResponseBody extends Model
{
    /**
     * @var configs
     */
    public $configs;

    /**
     * @description The ID of the request.
     *
     * @example 9BCC7BAA-ACBE-45E5-83F0-98BF7E693E84
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configs'   => 'Configs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = null !== $this->configs ? $this->configs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configs = configs::fromMap($map['Configs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
