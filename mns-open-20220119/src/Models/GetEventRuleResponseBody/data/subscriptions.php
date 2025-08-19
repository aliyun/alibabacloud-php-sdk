<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEventRuleResponseBody\data;

use AlibabaCloud\Dara\Model;

class subscriptions extends Model
{
    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $endpointValue;
    protected $_name = [
        'endpointType' => 'EndpointType',
        'endpointValue' => 'EndpointValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->endpointValue) {
            $res['EndpointValue'] = $this->endpointValue;
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
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['EndpointValue'])) {
            $model->endpointValue = $map['EndpointValue'];
        }

        return $model;
    }
}
