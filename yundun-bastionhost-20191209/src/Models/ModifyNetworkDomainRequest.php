<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyNetworkDomainRequest\proxies;
use AlibabaCloud\Tea\Model;

class ModifyNetworkDomainRequest extends Model
{
    /**
     * @description The new remarks of the network domain.
     *
     * @example xxx
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the bastion host to which the network domain to modify belongs.
     *
     * > You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-x0r3hyr3f09
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the network domain to modify.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $networkDomainId;

    /**
     * @description The new name of the network domain.
     *
     * @example test
     *
     * @var string
     */
    public $networkDomainName;

    /**
     * @description The new connection mode of the network domain. Valid values:
     *
     *   **Direct**
     *   **Proxy**
     *
     * @example Proxy
     *
     * @var string
     */
    public $networkDomainType;

    /**
     * @description The information about the proxy servers in the network domain.
     *
     * @var proxies[]
     */
    public $proxies;

    /**
     * @description The region ID of the bastion host to which the network domain to modify belongs.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment' => 'Comment',
        'instanceId' => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'proxies' => 'Proxies',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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
                $n = 0;
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
