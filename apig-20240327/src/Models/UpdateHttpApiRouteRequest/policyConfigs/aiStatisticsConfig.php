<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs;

use AlibabaCloud\Dara\Model;

class aiStatisticsConfig extends Model
{
    /**
     * @var bool
     */
    public $logRequestContent;

    /**
     * @var bool
     */
    public $logResponseContent;
    protected $_name = [
        'logRequestContent' => 'logRequestContent',
        'logResponseContent' => 'logResponseContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logRequestContent) {
            $res['logRequestContent'] = $this->logRequestContent;
        }

        if (null !== $this->logResponseContent) {
            $res['logResponseContent'] = $this->logResponseContent;
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
        if (isset($map['logRequestContent'])) {
            $model->logRequestContent = $map['logRequestContent'];
        }

        if (isset($map['logResponseContent'])) {
            $model->logResponseContent = $map['logResponseContent'];
        }

        return $model;
    }
}
