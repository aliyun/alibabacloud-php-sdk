<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class serviceDomainConfigs extends Model
{
    /**
     * @description Describe.
     *
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @description Domain name or IP.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Trace transparent transmission protocol list, must be transmitted when link tracking is enabled.
     *
     * @var string[]
     */
    public $propagatorTypes;

    /**
     * @description Whether to enable link tracking (need to enable the observable link Open Telemetry version), value:
     * - `false`: Do not enable link tracking.
     * @example true
     *
     * @var bool
     */
    public $tracing;
    protected $_name = [
        'description'     => 'Description',
        'domain'          => 'Domain',
        'propagatorTypes' => 'PropagatorTypes',
        'tracing'         => 'Tracing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->propagatorTypes) {
            $res['PropagatorTypes'] = $this->propagatorTypes;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceDomainConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PropagatorTypes'])) {
            if (!empty($map['PropagatorTypes'])) {
                $model->propagatorTypes = $map['PropagatorTypes'];
            }
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }

        return $model;
    }
}
