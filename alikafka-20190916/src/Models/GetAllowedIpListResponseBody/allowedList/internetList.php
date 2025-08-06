<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList;

use AlibabaCloud\Dara\Model;

class internetList extends Model
{
    /**
     * @var string[]
     */
    public $allowedIpGroup;

    /**
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

    public function validate()
    {
        if (\is_array($this->allowedIpGroup)) {
            Model::validateArray($this->allowedIpGroup);
        }
        if (\is_array($this->allowedIpList)) {
            Model::validateArray($this->allowedIpList);
        }
        if (\is_array($this->blackIPList)) {
            Model::validateArray($this->blackIPList);
        }
        if (\is_array($this->blackIPMap)) {
            Model::validateArray($this->blackIPMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedIpGroup) {
            if (\is_array($this->allowedIpGroup)) {
                $res['AllowedIpGroup'] = [];
                foreach ($this->allowedIpGroup as $key1 => $value1) {
                    $res['AllowedIpGroup'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->allowedIpList) {
            if (\is_array($this->allowedIpList)) {
                $res['AllowedIpList'] = [];
                $n1 = 0;
                foreach ($this->allowedIpList as $item1) {
                    $res['AllowedIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blackIPList) {
            if (\is_array($this->blackIPList)) {
                $res['BlackIPList'] = [];
                $n1 = 0;
                foreach ($this->blackIPList as $item1) {
                    $res['BlackIPList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blackIPMap) {
            if (\is_array($this->blackIPMap)) {
                $res['BlackIPMap'] = [];
                foreach ($this->blackIPMap as $key1 => $value1) {
                    $res['BlackIPMap'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedIpGroup'])) {
            if (!empty($map['AllowedIpGroup'])) {
                $model->allowedIpGroup = [];
                foreach ($map['AllowedIpGroup'] as $key1 => $value1) {
                    $model->allowedIpGroup[$key1] = $value1;
                }
            }
        }

        if (isset($map['AllowedIpList'])) {
            if (!empty($map['AllowedIpList'])) {
                $model->allowedIpList = [];
                $n1 = 0;
                foreach ($map['AllowedIpList'] as $item1) {
                    $model->allowedIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BlackIPList'])) {
            if (!empty($map['BlackIPList'])) {
                $model->blackIPList = [];
                $n1 = 0;
                foreach ($map['BlackIPList'] as $item1) {
                    $model->blackIPList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BlackIPMap'])) {
            if (!empty($map['BlackIPMap'])) {
                $model->blackIPMap = [];
                foreach ($map['BlackIPMap'] as $key1 => $value1) {
                    $model->blackIPMap[$key1] = $value1;
                }
            }
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
