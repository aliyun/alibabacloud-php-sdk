<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AliyunConsoleOpenApiQueryAliyunConsoleServcieListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $freeConcurrencyCount;

    /**
     * @var int
     */
    public $freeCount;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'freeConcurrencyCount' => 'FreeConcurrencyCount',
        'freeCount' => 'FreeCount',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->freeConcurrencyCount) {
            $res['FreeConcurrencyCount'] = $this->freeConcurrencyCount;
        }

        if (null !== $this->freeCount) {
            $res['FreeCount'] = $this->freeCount;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['FreeConcurrencyCount'])) {
            $model->freeConcurrencyCount = $map['FreeConcurrencyCount'];
        }

        if (isset($map['FreeCount'])) {
            $model->freeCount = $map['FreeCount'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
