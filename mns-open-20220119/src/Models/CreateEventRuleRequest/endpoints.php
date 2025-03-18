<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateEventRuleRequest;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example http
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description This parameter is required.
     *
     * @example test-xxx-queue
     *
     * @var string
     */
    public $endpointValue;
    protected $_name = [
        'endpointType' => 'EndpointType',
        'endpointValue' => 'EndpointValue',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return endpoints
     */
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
