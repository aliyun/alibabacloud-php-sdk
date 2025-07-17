<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class serviceDomainConfigs extends Model
{
    /**
     * @description The description.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name or IP address.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The trace propagation protocols. This parameter is required if the tracing analysis feature is enabled.
     *
     * @var string[]
     */
    public $propagatorTypes;

    /**
     * @description The sampling rate of a trace. Valid values: (0, 100].
     *
     * @example 100
     *
     * @var int
     */
    public $samplingRate;

    /**
     * @description Indicates whether the tracing analysis feature is enabled. To enable the tracing analysis feature, you must activate Managed Service for OpenTelemetry. Valid values:
     *
     *   `true`: enables the tracing analysis feature. If you enable the tracing analysis feature, related headers are inserted into requests for the domain name.
     *   `false`: disables the tracing analysis feature.
     *
     * @example true
     *
     * @var bool
     */
    public $tracing;
    protected $_name = [
        'description' => 'Description',
        'domain' => 'Domain',
        'propagatorTypes' => 'PropagatorTypes',
        'samplingRate' => 'SamplingRate',
        'tracing' => 'Tracing',
    ];

    public function validate() {}

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
        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
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
        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }

        return $model;
    }
}
