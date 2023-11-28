<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcEndpointRequest extends Model
{
    /**
     * @description The returned result details.
     *
     * @example 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1D***
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example epsrv-hp3xdsq46ael67lo****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The ID of the user endpoint service associated with the endpoint.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'serviceId'   => 'serviceId',
        'zoneId'      => 'zoneId',
        'dryRun'      => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
