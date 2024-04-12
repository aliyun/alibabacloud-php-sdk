<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyNetworkDomainRequest\proxies;
use AlibabaCloud\Tea\Model;

class ModifyNetworkDomainRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $comment;

    /**
     * @example bastionhost-cn-x0r3hyr3f09
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3
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
     * @var proxies[]
     */
    public $proxies;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'           => 'Comment',
        'instanceId'        => 'InstanceId',
        'networkDomainId'   => 'NetworkDomainId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'proxies'           => 'Proxies',
        'regionId'          => 'RegionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNetworkDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
