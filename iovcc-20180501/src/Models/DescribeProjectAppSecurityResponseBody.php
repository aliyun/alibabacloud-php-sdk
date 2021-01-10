<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeProjectAppSecurityResponseBody\projectAppSecurity;
use AlibabaCloud\Tea\Model;

class DescribeProjectAppSecurityResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var projectAppSecurity
     */
    public $projectAppSecurity;
    protected $_name = [
        'requestId'          => 'RequestId',
        'projectAppSecurity' => 'ProjectAppSecurity',
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
        if (null !== $this->projectAppSecurity) {
            $res['ProjectAppSecurity'] = null !== $this->projectAppSecurity ? $this->projectAppSecurity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProjectAppSecurityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectAppSecurity'])) {
            $model->projectAppSecurity = projectAppSecurity::fromMap($map['ProjectAppSecurity']);
        }

        return $model;
    }
}
