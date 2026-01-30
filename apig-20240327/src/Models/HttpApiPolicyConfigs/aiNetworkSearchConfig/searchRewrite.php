<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiNetworkSearchConfig;

use AlibabaCloud\Dara\Model;

class searchRewrite extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $maxCount;

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
        'enable' => 'enable',
        'maxCount' => 'maxCount',
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
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->maxCount) {
            $res['maxCount'] = $this->maxCount;
        }

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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['maxCount'])) {
            $model->maxCount = $map['maxCount'];
        }

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
