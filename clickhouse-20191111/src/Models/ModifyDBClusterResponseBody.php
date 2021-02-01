<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterResponseBody extends Model
{
    /**
     * @var string
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBCluster) {
            $res['DBCluster'] = $this->DBCluster;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBCluster'])) {
            $model->DBCluster = $map['DBCluster'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
