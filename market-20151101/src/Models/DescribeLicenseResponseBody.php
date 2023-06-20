<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license;
use AlibabaCloud\Tea\Model;

class DescribeLicenseResponseBody extends Model
{
    /**
     * @var license
     */
    public $license;

    /**
     * @example 6EF60BEC-0242-43AF-BB20-270359FB54A7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'license'   => 'License',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->license) {
            $res['License'] = null !== $this->license ? $this->license->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['License'])) {
            $model->license = license::fromMap($map['License']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
