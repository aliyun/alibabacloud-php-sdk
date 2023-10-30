<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserGroupResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @description All Bastionhost API requests must include common request parameters. For more information about common request parameters, see [Common parameters](~~148139~~).
     *
     * For more information about sample requests, see the "Examples" section of this topic.
     * @example Public
     *
     * @var string
     */
    public $activeAddressType;

    /**
     * @description The ID of the request.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description ListHostsForUserGroup
     *
     * @example host1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description WB662865
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @description Queries the hosts that a specified user group is authorized or not authorized to manage.
     *
     * @example 10.158.XX.XX
     *
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @description ListHostsForUserGroup
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;
    protected $_name = [
        'activeAddressType'  => 'ActiveAddressType',
        'comment'            => 'Comment',
        'hostId'             => 'HostId',
        'hostName'           => 'HostName',
        'hostPrivateAddress' => 'HostPrivateAddress',
        'hostPublicAddress'  => 'HostPublicAddress',
        'OSType'             => 'OSType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostPrivateAddress) {
            $res['HostPrivateAddress'] = $this->hostPrivateAddress;
        }
        if (null !== $this->hostPublicAddress) {
            $res['HostPublicAddress'] = $this->hostPublicAddress;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostPrivateAddress'])) {
            $model->hostPrivateAddress = $map['HostPrivateAddress'];
        }
        if (isset($map['HostPublicAddress'])) {
            $model->hostPublicAddress = $map['HostPublicAddress'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        return $model;
    }
}
