<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceBySQLRequest extends Model
{
    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Instance Overview** page in the IoT Platform console.
     *
     *
     **Important**
     *
     *   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.****
     *   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The SQL-like statement that you want to execute to query devices. For more information about specific requirements and examples, see the following section.
     *
     * @example SELECT * FROM device where product_key = "a1*********" limit 100, 20
     *
     * @var string
     */
    public $SQL;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'SQL'           => 'SQL',
    ];

    public function validate()
    {
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
