<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefaultProxyInstallVersionResponseBody extends Model
{
    /**
     * @description The default installation version.
     *
     * @example proxy_01_03
     *
     * @var string
     */
    public $installVersion;

    /**
     * @description The request ID.
     *
     * @example F9FCB51A-5078-5D31-9C4D-3B25BEF068C7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'installVersion' => 'InstallVersion',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->installVersion) {
            $res['InstallVersion'] = $this->installVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefaultProxyInstallVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstallVersion'])) {
            $model->installVersion = $map['InstallVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
