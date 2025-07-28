<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\edgeDnsClusters;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\forwardIp;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\vpcs;
use AlibabaCloud\Tea\Model;

class AddResolverRuleRequest extends Model
{
    /**
     * @var edgeDnsClusters[]
     */
    public $edgeDnsClusters;

    /**
     * @description The outbound endpoint ID. The outbound endpoint is used to forward the DNS requests to the specified destination IP addresses.
     *
     * @example hr****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The IP addresses and ports of the external DNS servers. Enter the IP addresses and ports of the destination servers to which the DNS requests are forwarded. You can enter up to **six** IP addresses and ports. Both private and public IP addresses are supported.
     *
     * >  If you specify public IP addresses as the IP addresses of the external DNS servers and Elastic Compute Service (ECS) instances in the outbound VPC are not assigned public IP addresses, you need to activate NAT Gateway for the VPC and create and manage SNAT entries on a NAT gateway.
     *
     * This parameter is required.
     *
     * @var forwardIp[]
     */
    public $forwardIp;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the forwarding rule. You can name the rule based on your business requirements.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the forwarding rule. The parameter value can only be OUTBOUND, which indicates that DNS requests are forwarded to one or more external IP addresses.
     *
     * >  You cannot change the value of Type after you create the forwarding rule.
     *
     * @example OUTBOUND
     *
     * @var string
     */
    public $type;

    /**
     * @var vpcs[]
     */
    public $vpcs;

    /**
     * @description The zone for which you want to forward DNS requests.
     *
     * >  You cannot change the value of ZoneName after you create the forwarding rule.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'edgeDnsClusters' => 'EdgeDnsClusters',
        'endpointId' => 'EndpointId',
        'forwardIp' => 'ForwardIp',
        'lang' => 'Lang',
        'name' => 'Name',
        'type' => 'Type',
        'vpcs' => 'Vpcs',
        'zoneName' => 'ZoneName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeDnsClusters) {
            $res['EdgeDnsClusters'] = [];
            if (null !== $this->edgeDnsClusters && \is_array($this->edgeDnsClusters)) {
                $n = 0;
                foreach ($this->edgeDnsClusters as $item) {
                    $res['EdgeDnsClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->forwardIp) {
            $res['ForwardIp'] = [];
            if (null !== $this->forwardIp && \is_array($this->forwardIp)) {
                $n = 0;
                foreach ($this->forwardIp as $item) {
                    $res['ForwardIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcs) {
            $res['Vpcs'] = [];
            if (null !== $this->vpcs && \is_array($this->vpcs)) {
                $n = 0;
                foreach ($this->vpcs as $item) {
                    $res['Vpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddResolverRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeDnsClusters'])) {
            if (!empty($map['EdgeDnsClusters'])) {
                $model->edgeDnsClusters = [];
                $n = 0;
                foreach ($map['EdgeDnsClusters'] as $item) {
                    $model->edgeDnsClusters[$n++] = null !== $item ? edgeDnsClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ForwardIp'])) {
            if (!empty($map['ForwardIp'])) {
                $model->forwardIp = [];
                $n = 0;
                foreach ($map['ForwardIp'] as $item) {
                    $model->forwardIp[$n++] = null !== $item ? forwardIp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Vpcs'])) {
            if (!empty($map['Vpcs'])) {
                $model->vpcs = [];
                $n = 0;
                foreach ($map['Vpcs'] as $item) {
                    $model->vpcs[$n++] = null !== $item ? vpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
