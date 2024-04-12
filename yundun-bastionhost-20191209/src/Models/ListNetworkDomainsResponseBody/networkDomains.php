<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody\networkDomains\proxiesState;
use AlibabaCloud\Tea\Model;

class networkDomains extends Model
{
    /**
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example true
     *
     * @var bool
     */
    public $default;

    /**
     * @example 2
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @example test
     *
     * @var string
     */
    public $networkDomainName;

    /**
     * @example Proxy
     *
     * @var string
     */
    public $networkDomainType;

    /**
     * @var proxiesState[]
     */
    public $proxiesState;
    protected $_name = [
        'comment'           => 'Comment',
        'default'           => 'Default',
        'networkDomainId'   => 'NetworkDomainId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'proxiesState'      => 'ProxiesState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }
        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }
        if (null !== $this->networkDomainName) {
            $res['NetworkDomainName'] = $this->networkDomainName;
        }
        if (null !== $this->networkDomainType) {
            $res['NetworkDomainType'] = $this->networkDomainType;
        }
        if (null !== $this->proxiesState) {
            $res['ProxiesState'] = [];
            if (null !== $this->proxiesState && \is_array($this->proxiesState)) {
                $n = 0;
                foreach ($this->proxiesState as $item) {
                    $res['ProxiesState'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }
        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }
        if (isset($map['NetworkDomainName'])) {
            $model->networkDomainName = $map['NetworkDomainName'];
        }
        if (isset($map['NetworkDomainType'])) {
            $model->networkDomainType = $map['NetworkDomainType'];
        }
        if (isset($map['ProxiesState'])) {
            if (!empty($map['ProxiesState'])) {
                $model->proxiesState = [];
                $n                   = 0;
                foreach ($map['ProxiesState'] as $item) {
                    $model->proxiesState[$n++] = null !== $item ? proxiesState::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
