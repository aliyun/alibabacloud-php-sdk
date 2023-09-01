<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceSSLResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example pxc-sddddddcym7g7w****.polarx.singapore.rds.aliyuncs.com
     *
     * @var string
     */
    public $certCommonName;

    /**
     * @example false
     *
     * @var bool
     */
    public $SSLEnabled;

    /**
     * @example 2022-11-04T09:39:07Z
     *
     * @var string
     */
    public $SSLExpiredTime;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'SSLEnabled'     => 'SSLEnabled',
        'SSLExpiredTime' => 'SSLExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->SSLExpiredTime) {
            $res['SSLExpiredTime'] = $this->SSLExpiredTime;
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
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['SSLExpiredTime'])) {
            $model->SSLExpiredTime = $map['SSLExpiredTime'];
        }

        return $model;
    }
}
