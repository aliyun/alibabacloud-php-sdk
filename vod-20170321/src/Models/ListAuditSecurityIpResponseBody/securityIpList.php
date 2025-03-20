<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpList extends Model
{
    /**
     * @description The time when the review security group was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-05-22T06:54:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The IP addresses in the review security group.
     *
     * @example 30.27.14.0/24,30.39.127.245
     *
     * @var string
     */
    public $ips;

    /**
     * @description The time when the review security group was last modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-05-22T06:55:14Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The name of the review security group.
     *
     * @example Default
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'ips' => 'Ips',
        'modificationTime' => 'ModificationTime',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate() {}

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
