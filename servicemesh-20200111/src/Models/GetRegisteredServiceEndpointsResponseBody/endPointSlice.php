<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\endPointSlice\endpointsDetails;

class endPointSlice extends Model
{
    /**
     * @var endpointsDetails[]
     */
    public $endpointsDetails;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'endpointsDetails' => 'EndpointsDetails',
        'location' => 'Location',
        'namespace' => 'Namespace',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        if (\is_array($this->endpointsDetails)) {
            Model::validateArray($this->endpointsDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointsDetails) {
            if (\is_array($this->endpointsDetails)) {
                $res['EndpointsDetails'] = [];
                $n1 = 0;
                foreach ($this->endpointsDetails as $item1) {
                    $res['EndpointsDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['EndpointsDetails'])) {
            if (!empty($map['EndpointsDetails'])) {
                $model->endpointsDetails = [];
                $n1 = 0;
                foreach ($map['EndpointsDetails'] as $item1) {
                    $model->endpointsDetails[$n1] = endpointsDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
