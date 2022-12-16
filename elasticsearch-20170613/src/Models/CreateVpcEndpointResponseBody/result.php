<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateVpcEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ep-bp1tah7zbrwmkjef****.epsrv-bp1w0p3jdirbfmt6****.cn-hangzhou.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $endpointDomain;

    /**
     * @example ep-bp1tah7zbrwmkjef****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @example vpcElasticSearchABC
     *
     * @var string
     */
    public $endpointName;

    /**
     * @example epsrv-bp1w0p3jdirbfmt6****
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'endpointDomain' => 'endpointDomain',
        'endpointId'     => 'endpointId',
        'endpointName'   => 'endpointName',
        'serviceId'      => 'serviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
