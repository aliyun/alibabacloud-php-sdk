<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceKeyPairResponseBody extends Model
{
    /**
     * @example 4f:70:62:e9:0c:72:f7:ee:74:ce:e3:bf:e0:82:**:**
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @example KeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fingerprint' => 'Fingerprint',
        'keyPairName' => 'KeyPairName',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceKeyPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
