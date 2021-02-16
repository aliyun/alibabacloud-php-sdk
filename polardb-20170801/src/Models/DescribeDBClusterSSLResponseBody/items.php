<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $SSLExpireTime;

    /**
     * @var string
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $SSLConnectionString;

    /**
     * @var string
     */
    public $DBEndpointId;
    protected $_name = [
        'SSLExpireTime'       => 'SSLExpireTime',
        'SSLEnabled'          => 'SSLEnabled',
        'SSLConnectionString' => 'SSLConnectionString',
        'DBEndpointId'        => 'DBEndpointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->SSLConnectionString) {
            $res['SSLConnectionString'] = $this->SSLConnectionString;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['SSLConnectionString'])) {
            $model->SSLConnectionString = $map['SSLConnectionString'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }

        return $model;
    }
}
