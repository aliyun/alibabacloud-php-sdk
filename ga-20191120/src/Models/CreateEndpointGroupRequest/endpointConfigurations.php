<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateEndpointGroupRequest;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $endpoint;
    protected $_name = [
        'type'                       => 'Type',
        'enableClientIPPreservation' => 'EnableClientIPPreservation',
        'weight'                     => 'Weight',
        'endpoint'                   => 'Endpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->enableClientIPPreservation) {
            $res['EnableClientIPPreservation'] = $this->enableClientIPPreservation;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EnableClientIPPreservation'])) {
            $model->enableClientIPPreservation = $map['EnableClientIPPreservation'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        return $model;
    }
}
