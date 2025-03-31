<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CancelSparkWarehouseBatchSQLRequest extends Model
{
    /**
     * @var string
     */
    public $agency;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $queryId;
    protected $_name = [
        'agency' => 'Agency',
        'DBClusterId' => 'DBClusterId',
        'queryId' => 'QueryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agency) {
            $res['Agency'] = $this->agency;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
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
        if (isset($map['Agency'])) {
            $model->agency = $map['Agency'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        return $model;
    }
}
