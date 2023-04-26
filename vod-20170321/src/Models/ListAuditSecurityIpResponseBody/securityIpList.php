<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpList extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **ListAuditSecurityIp**.
     *
     * @example 2018-05-22T06:54:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Queries the IP addresses in a review security group.
     *
     * @example 30.27.14.0/24,30.39.127.245
     *
     * @var string
     */
    public $ips;

    /**
     * @example 2018-05-22T06:55:14Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @example Default
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'ips'               => 'Ips',
        'modificationTime'  => 'ModificationTime',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
