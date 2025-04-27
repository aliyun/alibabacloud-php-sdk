<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateVpcEndpointResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $endpointDomain;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'endpointDomain' => 'endpointDomain',
        'endpointId' => 'endpointId',
        'endpointName' => 'endpointName',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointDomain) {
            $res['endpointDomain'] = $this->endpointDomain;
        }

        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['endpointDomain'])) {
            $model->endpointDomain = $map['endpointDomain'];
        }

        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }

        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
