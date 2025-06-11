<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterResponseBody\DBCluster;

class ModifyDBClusterResponseBody extends Model
{
    /**
     * @var DBCluster
     */
    public $DBCluster;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBCluster' => 'DBCluster',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DBCluster) {
            $this->DBCluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBCluster) {
            $res['DBCluster'] = null !== $this->DBCluster ? $this->DBCluster->toArray($noStream) : $this->DBCluster;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBCluster'])) {
            $model->DBCluster = DBCluster::fromMap($map['DBCluster']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
