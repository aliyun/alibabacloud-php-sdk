<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterConnectionStringRequest extends Model
{
    /**
     * @description The prefix of the public endpoint.
     *
     *   The prefix can contain lowercase letters, digits, and hyphens (-). It must start with a lowercase letter.
     *   The prefix can be up to 30 characters in length.
     *
     * @example test-123
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The public endpoint of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp11q28kvl688****.ads.aliyuncs.com
     *
     * @var string
     */
    public $currentConnectionString;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The port number. Set the value to **3306**.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'connectionStringPrefix'  => 'ConnectionStringPrefix',
        'currentConnectionString' => 'CurrentConnectionString',
        'DBClusterId'             => 'DBClusterId',
        'port'                    => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->currentConnectionString) {
            $res['CurrentConnectionString'] = $this->currentConnectionString;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterConnectionStringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['CurrentConnectionString'])) {
            $model->currentConnectionString = $map['CurrentConnectionString'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
