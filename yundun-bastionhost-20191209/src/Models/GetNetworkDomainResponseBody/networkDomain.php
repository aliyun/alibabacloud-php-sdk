<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody\networkDomain\proxies;
use AlibabaCloud\Tea\Model;

class networkDomain extends Model
{
    /**
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example false
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
     * @var proxies[]
     */
    public $proxies;
    protected $_name = [
        'comment'           => 'Comment',
        'default'           => 'Default',
        'networkDomainId'   => 'NetworkDomainId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'proxies'           => 'Proxies',
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
        if (null !== $this->proxies) {
            $res['Proxies'] = [];
            if (null !== $this->proxies && \is_array($this->proxies)) {
                $n = 0;
                foreach ($this->proxies as $item) {
                    $res['Proxies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkDomain
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
        if (isset($map['Proxies'])) {
            if (!empty($map['Proxies'])) {
                $model->proxies = [];
                $n              = 0;
                foreach ($map['Proxies'] as $item) {
                    $model->proxies[$n++] = null !== $item ? proxies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
