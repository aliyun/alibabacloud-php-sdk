<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerZonesRequest\zoneMappings;
use AlibabaCloud\Tea\Model;

class UpdateLoadBalancerZonesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, a `2xx HTTP` status code is returned and the operation is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the ALB instance.
     *
     * @example lb-bp1b6c719dfa08ex****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The zones and the vSwitches. You must specify at least two zones. The specified zones overwrite the existing configurations.
     *
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
        'loadBalancerId' => 'LoadBalancerId',
        'zoneMappings'   => 'ZoneMappings',
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
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoadBalancerZonesRequest
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
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
