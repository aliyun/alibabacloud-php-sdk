<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPublishRevisionInfo\cloudProductConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class functionConfigs extends Model
{
    /**
     * @example gs-xxx
     *
     * @var string
     */
    public $gatewayServiceId;

    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @example demo-function
     *
     * @var string
     */
    public $name;

    /**
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'gatewayServiceId' => 'gatewayServiceId',
        'match'            => 'match',
        'name'             => 'name',
        'qualifier'        => 'qualifier',
        'weight'           => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayServiceId) {
            $res['gatewayServiceId'] = $this->gatewayServiceId;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceId'])) {
            $model->gatewayServiceId = $map['gatewayServiceId'];
        }
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
