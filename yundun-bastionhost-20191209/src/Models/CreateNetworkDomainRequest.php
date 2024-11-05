<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateNetworkDomainRequest\proxies;
use AlibabaCloud\Tea\Model;

class CreateNetworkDomainRequest extends Model
{
    /**
     * @description The remarks of the network domain. The remarks can be up to 500 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the bastion host for which you want to create a network domain.
     *
     * This parameter is required.
     * @example bastionhost-cn-lbj3bw4ma02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the network domain that you want to create. The name can be up to 128 characters in length.
     *
     * This parameter is required.
     * @var string
     */
    public $networkDomainName;

    /**
     * @description The connection mode of the network domain to be created. Valid values:
     *
     *   Direct
     *   Proxy
     *
     * This parameter is required.
     * @example Proxy
     *
     * @var string
     */
    public $networkDomainType;

    /**
     * @description The information about the proxy servers.
     *
     * @var proxies[]
     */
    public $proxies;

    /**
     * @description The region ID of the bastion host for which you want to create a network domain.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'           => 'Comment',
        'instanceId'        => 'InstanceId',
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
     * @return CreateNetworkDomainRequest
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
