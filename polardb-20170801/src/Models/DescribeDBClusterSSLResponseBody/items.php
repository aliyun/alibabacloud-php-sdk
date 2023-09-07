<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The ID of the endpoint.
     *
     * @example pe-************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The SSL connection string.
     *
     * @example pc-************.mysql.polardb.rds.aliyuncs.com
     *
     * @var string
     */
    public $SSLConnectionString;

    /**
     * @description Indicates whether SSL encryption is enabled. Valid values:
     *
     *   **Enabled**: SSL is enabled.
     *   **Disable**: SSL is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description The time when the server certificate expires. The time is in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2021-11-13T07:14:22Z
     *
     * @var string
     */
    public $SSLExpireTime;
    protected $_name = [
        'DBEndpointId'        => 'DBEndpointId',
        'SSLConnectionString' => 'SSLConnectionString',
        'SSLEnabled'          => 'SSLEnabled',
        'SSLExpireTime'       => 'SSLExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
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

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
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
