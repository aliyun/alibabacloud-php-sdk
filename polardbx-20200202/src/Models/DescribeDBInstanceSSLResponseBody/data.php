<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceSSLResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $SSLExpiredTime;

    /**
     * @var string
     */
    public $certCommonName;
    protected $_name = [
        'SSLEnabled'     => 'SSLEnabled',
        'SSLExpiredTime' => 'SSLExpiredTime',
        'certCommonName' => 'CertCommonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->SSLExpiredTime) {
            $res['SSLExpiredTime'] = $this->SSLExpiredTime;
        }
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['SSLExpiredTime'])) {
            $model->SSLExpiredTime = $map['SSLExpiredTime'];
        }
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }

        return $model;
    }
}
