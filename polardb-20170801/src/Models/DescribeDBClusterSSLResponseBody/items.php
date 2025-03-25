<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $DBEndpointId;

    /**
     * @var string
     */
    public $SSLAutoRotate;

    /**
     * @var string
     */
    public $SSLConnectionString;

    /**
     * @var string
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $SSLExpireTime;
    protected $_name = [
        'DBEndpointId' => 'DBEndpointId',
        'SSLAutoRotate' => 'SSLAutoRotate',
        'SSLConnectionString' => 'SSLConnectionString',
        'SSLEnabled' => 'SSLEnabled',
        'SSLExpireTime' => 'SSLExpireTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }

        if (null !== $this->SSLAutoRotate) {
            $res['SSLAutoRotate'] = $this->SSLAutoRotate;
        }

        if (null !== $this->SSLConnectionString) {
            $res['SSLConnectionString'] = $this->SSLConnectionString;
        }

        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }

        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }

        if (isset($map['SSLAutoRotate'])) {
            $model->SSLAutoRotate = $map['SSLAutoRotate'];
        }

        if (isset($map['SSLConnectionString'])) {
            $model->SSLConnectionString = $map['SSLConnectionString'];
        }

        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }

        return $model;
    }
}
