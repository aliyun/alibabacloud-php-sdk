<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\Dara\Model;

class monitors extends Model
{
    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $operatorCode;
    protected $_name = [
        'cityCode' => 'CityCode',
        'clientType' => 'ClientType',
        'operatorCode' => 'OperatorCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
