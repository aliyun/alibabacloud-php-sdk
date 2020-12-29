<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeTraceLicenseKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $licenseKey;
    protected $_name = [
        'requestId'  => 'RequestId',
        'licenseKey' => 'LicenseKey',
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
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceLicenseKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }

        return $model;
    }
}
