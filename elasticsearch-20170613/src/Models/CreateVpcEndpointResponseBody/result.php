<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateVpcEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $serviceId;

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
    protected $_name = [
        'serviceId'      => 'serviceId',
        'endpointDomain' => 'endpointDomain',
        'endpointId'     => 'endpointId',
        'endpointName'   => 'endpointName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->endpointDomain) {
            $res['endpointDomain'] = $this->endpointDomain;
        }
        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['endpointDomain'])) {
            $model->endpointDomain = $map['endpointDomain'];
        }
        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }

        return $model;
    }
}
