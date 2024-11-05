<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListNetworkDomainsRequest extends Model
{
    /**
     * @description The bastion host ID.
     *
     * This parameter is required.
     * @example bastionhost-cn-tl329pvu70x
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the network domain.
     *
     * @var string
     */
    public $networkDomainName;

    /**
     * @description The connection mode of the network domain. Valid values:
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
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\\
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'networkDomainName' => 'NetworkDomainName',
        'networkDomainType' => 'NetworkDomainType',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkDomainName) {
            $res['NetworkDomainName'] = $this->networkDomainName;
        }
        if (null !== $this->networkDomainType) {
            $res['NetworkDomainType'] = $this->networkDomainType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetworkDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkDomainName'])) {
            $model->networkDomainName = $map['NetworkDomainName'];
        }
        if (isset($map['NetworkDomainType'])) {
            $model->networkDomainType = $map['NetworkDomainType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
