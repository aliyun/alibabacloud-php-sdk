<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs\aiFallbackConfig;

use AlibabaCloud\Dara\Model;

class serviceConfigs extends Model
{
    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $targetModelName;
    protected $_name = [
        'serviceId' => 'serviceId',
        'targetModelName' => 'targetModelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->targetModelName) {
            $res['targetModelName'] = $this->targetModelName;
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
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['targetModelName'])) {
            $model->targetModelName = $map['targetModelName'];
        }

        return $model;
    }
}
