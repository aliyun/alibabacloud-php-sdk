<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookInputOutputResponseBody\config;
use AlibabaCloud\Tea\Model;

class DescribePlaybookInputOutputResponseBody extends Model
{
    /**
     * @description The configurations.
     *
     * @var config
     */
    public $config;

    /**
     * @description The request ID.
     *
     * @example 688B4CCD-5272-5DCF-9D76-FE5EFEF545F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config'    => 'Config',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookInputOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
