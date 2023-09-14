<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class EnableLoadBalancerAccessLogRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length.
     *
     * > If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ALB instance ID.
     *
     * @example alb-bd6oylbckp6k9x****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The project to which the access log is shipped.
     *
     * @example sls-setter
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The Logstore to which the access log is shipped.
     *
     * @example test
     *
     * @var string
     */
    public $logStore;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
        'loadBalancerId' => 'LoadBalancerId',
        'logProject'     => 'LogProject',
        'logStore'       => 'LogStore',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableLoadBalancerAccessLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        return $model;
    }
}
