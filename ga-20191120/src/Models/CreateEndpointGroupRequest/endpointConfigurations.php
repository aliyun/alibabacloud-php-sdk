<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'enableClientIPPreservation' => 'EnableClientIPPreservation',
        'endpoint'                   => 'Endpoint',
        'type'                       => 'Type',
        'weight'                     => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableClientIPPreservation) {
            $res['EnableClientIPPreservation'] = $this->enableClientIPPreservation;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableClientIPPreservation'])) {
            $model->enableClientIPPreservation = $map['EnableClientIPPreservation'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
