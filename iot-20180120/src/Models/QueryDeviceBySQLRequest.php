<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceBySQLRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $SQL;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'SQL'           => 'SQL',
    ];

    public function validate()
    {
        Model::validateRequired('SQL', $this->SQL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceBySQLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        return $model;
    }
}
