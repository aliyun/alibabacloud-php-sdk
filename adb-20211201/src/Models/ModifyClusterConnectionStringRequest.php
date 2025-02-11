<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyClusterConnectionStringRequest extends Model
{
    /**
     * @var string
     */
    public $connectionStringPrefix;
    /**
     * @var string
     */
    public $currentConnectionString;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
