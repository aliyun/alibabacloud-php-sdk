<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverEndpointRequest\ipConfig;
use AlibabaCloud\Tea\Model;

class UpdateResolverEndpointRequest extends Model
{
    /**
     * @description The endpoint ID.
     *
     * This parameter is required.
     * @example hr****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The source IP addresses of outbound traffic. You can add two to six IP addresses.
     *
     * >  You must add at least two source IP addresses for outbound traffic to ensure high availability. We recommend that you add two IP addresses that reside in different zones. You can add up to six source IP addresses.
     * @var ipConfig[]
     */
    public $ipConfig;

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
     * @description The endpoint name.
     *
     * @example endpoint-test-name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'ipConfig'   => 'IpConfig',
        'lang'       => 'Lang',
        'name'       => 'Name',
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
        if (null !== $this->ipConfig) {
            $res['IpConfig'] = [];
            if (null !== $this->ipConfig && \is_array($this->ipConfig)) {
                $n = 0;
                foreach ($this->ipConfig as $item) {
                    $res['IpConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResolverEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['IpConfig'])) {
            if (!empty($map['IpConfig'])) {
                $model->ipConfig = [];
                $n               = 0;
                foreach ($map['IpConfig'] as $item) {
                    $model->ipConfig[$n++] = null !== $item ? ipConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
