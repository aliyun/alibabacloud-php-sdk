<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlsLogStoreStatusResponseBody extends Model
{
    /**
     * @description Indicates whether a Logstore is created for WAF. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $existStatus;

    /**
     * @description The request ID.
     *
     * @example 184F538F-C115-5C89-A4EF-C79CD2E29AC7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'existStatus' => 'ExistStatus',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->existStatus) {
            $res['ExistStatus'] = $this->existStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlsLogStoreStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExistStatus'])) {
            $model->existStatus = $map['ExistStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
