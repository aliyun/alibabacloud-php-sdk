<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo\environments\cloudProductConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiBackendMatchConditions;
use AlibabaCloud\Tea\Model;

class mseNacosConfigs extends Model
{
    /**
     * @example gs-xxx
     *
     * @var string
     */
    public $gatewayServiceId;

    /**
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @var HttpApiBackendMatchConditions
     */
    public $match;

    /**
     * @example springboot-test
     *
     * @var string
     */
    public $name;

    /**
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'gatewayServiceId' => 'gatewayServiceId',
        'groupName'        => 'groupName',
        'match'            => 'match',
        'name'             => 'name',
        'namespace'        => 'namespace',
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
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mseNacosConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayServiceId'])) {
            $model->gatewayServiceId = $map['gatewayServiceId'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['match'])) {
            $model->match = HttpApiBackendMatchConditions::fromMap($map['match']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
