<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeTraceLicenseKeyResponseBody extends Model
{
    /**
     * @example b590lhguqs@3a75d95f218****
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @example 29053944-6FE5-4240-8927-10095ECE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'licenseKey' => 'LicenseKey',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
