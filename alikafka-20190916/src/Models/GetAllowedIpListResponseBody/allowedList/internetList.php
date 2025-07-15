<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList;

use AlibabaCloud\Tea\Model;

class internetList extends Model
{
    /**
     * @description The group to which the IP address whitelist belongs.
     *
     * @var string[]
     */
    public $allowedIpGroup;

    /**
     * @description The information about the IP address whitelist.
     *
     * @var string[]
     */
    public $allowedIpList;

    /**
     * @var string[]
     */
    public $blackIPList;

    /**
     * @var string[]
     */
    public $blackIPMap;

    /**
     * @description The port range. Valid value:
     *
     **9093/9093**.
     *
     * @example 9093/9093
     *
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $userDefinedSharedSecurityGroup;
    protected $_name = [
        'allowedIpGroup' => 'AllowedIpGroup',
        'allowedIpList' => 'AllowedIpList',
        'blackIPList' => 'BlackIPList',
        'blackIPMap' => 'BlackIPMap',
        'portRange' => 'PortRange',
        'securityGroupId' => 'SecurityGroupId',
        'userDefinedSharedSecurityGroup' => 'UserDefinedSharedSecurityGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedIpGroup) {
            $res['AllowedIpGroup'] = $this->allowedIpGroup;
        }
        if (null !== $this->allowedIpList) {
            $res['AllowedIpList'] = $this->allowedIpList;
        }
        if (null !== $this->blackIPList) {
            $res['BlackIPList'] = $this->blackIPList;
        }
        if (null !== $this->blackIPMap) {
            $res['BlackIPMap'] = $this->blackIPMap;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->userDefinedSharedSecurityGroup) {
            $res['UserDefinedSharedSecurityGroup'] = $this->userDefinedSharedSecurityGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedIpGroup'])) {
            $model->allowedIpGroup = $map['AllowedIpGroup'];
        }
        if (isset($map['AllowedIpList'])) {
            if (!empty($map['AllowedIpList'])) {
                $model->allowedIpList = $map['AllowedIpList'];
            }
        }
        if (isset($map['BlackIPList'])) {
            if (!empty($map['BlackIPList'])) {
                $model->blackIPList = $map['BlackIPList'];
            }
        }
        if (isset($map['BlackIPMap'])) {
            $model->blackIPMap = $map['BlackIPMap'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['UserDefinedSharedSecurityGroup'])) {
            $model->userDefinedSharedSecurityGroup = $map['UserDefinedSharedSecurityGroup'];
        }

        return $model;
    }
}
