<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeProtectionModuleStatusResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $moduleStatus;

    /**
     * @example D7861F61-5B61-46CE-A47C-6B19160D5EB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'moduleStatus' => 'ModuleStatus',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleStatus) {
            $res['ModuleStatus'] = $this->moduleStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtectionModuleStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleStatus'])) {
            $model->moduleStatus = $map['ModuleStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
