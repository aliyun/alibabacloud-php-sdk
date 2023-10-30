<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostAccountsRequest extends Model
{
    /**
     * @description Indicates whether a password is configured for the host account.
     *
     * Valid values:
     *
     *   true: A password is configured for the host account.
     *   false: No passwords are configured for the host account.
     *
     * @example abc
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The protocol used by the host whose accounts you want to query.
     *
     * Valid values:
     *
     *   SSH
     *   RDP
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the shared key.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation that you want to perform.
     *
     * Set the value to **ListHostAccounts**.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The name of the host account that you want to query. The name can be up to 128 characters in length. Only exact match is supported.
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @description The ID of the specified host whose accounts you want to query.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the ID of the host.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId'          => 'HostId',
        'instanceId'      => 'InstanceId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'protocolName'    => 'ProtocolName',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
