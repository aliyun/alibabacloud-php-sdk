<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterResponseBody;

use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $dbClusterId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'dbClusterId' => 'dbClusterId',
        'orderId'     => 'orderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbClusterId) {
            $res['dbClusterId'] = $this->dbClusterId;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbClusterId'])) {
            $model->dbClusterId = $map['dbClusterId'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        return $model;
    }
}
