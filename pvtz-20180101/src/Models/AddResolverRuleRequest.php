<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest\forwardIp;
use AlibabaCloud\Tea\Model;

class AddResolverRuleRequest extends Model
{
    /**
     * @description The outbound endpoint ID. The outbound endpoint is used to forward the DNS requests to the specified destination IP addresses.
     *
     * This parameter is required.
     * @example hr****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The IP addresses and ports of the external DNS servers. Enter the IP addresses and ports of the destination servers to which the DNS requests are forwarded. You can enter up to **six** IP addresses and ports. Both private and public IP addresses are supported.
     *
     * This parameter is required.
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
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the forwarding rule. You can name the rule based on your business requirements.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the forwarding rule. The parameter value can only be OUTBOUND, which indicates that DNS requests are forwarded to one or more external IP addresses.
     *
     * >  You cannot change the value of Type after you create the forwarding rule.
     * @example OUTBOUND
     *
     * @var string
     */
    public $type;

    /**
     * @description The zone for which you want to forward DNS requests.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'forwardIp'  => 'ForwardIp',
        'lang'       => 'Lang',
        'name'       => 'Name',
        'type'       => 'Type',
        'zoneName'   => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ForwardIp'])) {
            if (!empty($map['ForwardIp'])) {
                $model->forwardIp = [];
                $n                = 0;
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
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
