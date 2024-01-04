<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class monitors extends Model
{
    /**
     * @description The city code.
     *
     * @example 100001
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The client type of the monitoring point. Valid values: 1: data center. 2: Internet. 3: mobile device. 4: ECS instance.
     *
     * @example 4
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The carrier code.
     *
     * @example 1
     *
     * @var string
     */
    public $operatorCode;
    protected $_name = [
        'cityCode'     => 'CityCode',
        'clientType'   => 'ClientType',
        'operatorCode' => 'OperatorCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->operatorCode) {
            $res['OperatorCode'] = $this->operatorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['OperatorCode'])) {
            $model->operatorCode = $map['OperatorCode'];
        }

        return $model;
    }
}
