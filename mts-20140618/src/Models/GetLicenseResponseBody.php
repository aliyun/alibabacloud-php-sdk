<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class GetLicenseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $license;
    protected $_name = [
        'requestId' => 'RequestId',
        'license'   => 'License',
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
        if (null !== $this->license) {
            $res['License'] = $this->license;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['License'])) {
            $model->license = $map['License'];
        }

        return $model;
    }
}
