<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class monitors extends Model
{
    /**
     * @description The city code.
     *
     * This parameter is required.
     * @example 100023
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description The client type of the detection point. Valid values:
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The carrier code.
     *
     * This parameter is required.
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
