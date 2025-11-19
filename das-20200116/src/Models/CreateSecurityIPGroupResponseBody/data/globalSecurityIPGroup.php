<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\CreateSecurityIPGroupResponseBody\data;

use AlibabaCloud\Dara\Model;

class globalSecurityIPGroup extends Model
{
    /**
     * @var string
     */
    public $GIpList;

    /**
     * @var string
     */
    public $globalIgName;

    /**
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityIpType;

    /**
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'GIpList' => 'GIpList',
        'globalIgName' => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId' => 'RegionId',
        'securityIpType' => 'SecurityIpType',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GIpList) {
            $res['GIpList'] = $this->GIpList;
        }

        if (null !== $this->globalIgName) {
            $res['GlobalIgName'] = $this->globalIgName;
        }

        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityIpType) {
            $res['SecurityIpType'] = $this->securityIpType;
        }

        if (null !== $this->whitelistNetType) {
            $res['WhitelistNetType'] = $this->whitelistNetType;
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
        if (isset($map['GIpList'])) {
            $model->GIpList = $map['GIpList'];
        }

        if (isset($map['GlobalIgName'])) {
            $model->globalIgName = $map['GlobalIgName'];
        }

        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityIpType'])) {
            $model->securityIpType = $map['SecurityIpType'];
        }

        if (isset($map['WhitelistNetType'])) {
            $model->whitelistNetType = $map['WhitelistNetType'];
        }

        return $model;
    }
}
