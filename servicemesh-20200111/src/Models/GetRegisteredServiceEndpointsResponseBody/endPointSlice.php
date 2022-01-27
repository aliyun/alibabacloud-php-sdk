<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\endPointSlice\endpointsDetails;
use AlibabaCloud\Tea\Model;

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
        'location'         => 'Location',
        'namespace'        => 'Namespace',
        'serviceName'      => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointsDetails) {
            $res['EndpointsDetails'] = [];
            if (null !== $this->endpointsDetails && \is_array($this->endpointsDetails)) {
                $n = 0;
                foreach ($this->endpointsDetails as $item) {
                    $res['EndpointsDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return endPointSlice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointsDetails'])) {
            if (!empty($map['EndpointsDetails'])) {
                $model->endpointsDetails = [];
                $n                       = 0;
                foreach ($map['EndpointsDetails'] as $item) {
                    $model->endpointsDetails[$n++] = null !== $item ? endpointsDetails::fromMap($item) : $item;
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
