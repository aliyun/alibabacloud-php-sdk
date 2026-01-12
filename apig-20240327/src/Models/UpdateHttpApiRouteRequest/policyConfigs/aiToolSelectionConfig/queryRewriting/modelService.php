<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiToolSelectionConfig\queryRewriting;

use AlibabaCloud\Dara\Model;

class modelService extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var int
     */
    public $timeoutMillisecond;
    protected $_name = [
        'modelName' => 'modelName',
        'serviceId' => 'serviceId',
        'timeoutMillisecond' => 'timeoutMillisecond',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->timeoutMillisecond) {
            $res['timeoutMillisecond'] = $this->timeoutMillisecond;
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
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['timeoutMillisecond'])) {
            $model->timeoutMillisecond = $map['timeoutMillisecond'];
        }

        return $model;
    }
}
