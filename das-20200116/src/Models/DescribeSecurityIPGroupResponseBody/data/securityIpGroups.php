<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupResponseBody\data\securityIpGroups\engineInfoList;

class securityIpGroups extends Model
{
    /**
     * @var string[]
     */
    public $dbInstances;

    /**
     * @var engineInfoList[]
     */
    public $engineInfoList;

    /**
     * @var string
     */
    public $GEcsSgIdList;

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
    public $uid;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'dbInstances' => 'DbInstances',
        'engineInfoList' => 'EngineInfoList',
        'GEcsSgIdList' => 'GEcsSgIdList',
        'GIpList' => 'GIpList',
        'globalIgName' => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId' => 'RegionId',
        'securityIpType' => 'SecurityIpType',
        'uid' => 'Uid',
        'userId' => 'UserId',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate()
    {
        if (\is_array($this->dbInstances)) {
            Model::validateArray($this->dbInstances);
        }
        if (\is_array($this->engineInfoList)) {
            Model::validateArray($this->engineInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstances) {
            if (\is_array($this->dbInstances)) {
                $res['DbInstances'] = [];
                $n1 = 0;
                foreach ($this->dbInstances as $item1) {
                    $res['DbInstances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->engineInfoList) {
            if (\is_array($this->engineInfoList)) {
                $res['EngineInfoList'] = [];
                $n1 = 0;
                foreach ($this->engineInfoList as $item1) {
                    $res['EngineInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->GEcsSgIdList) {
            $res['GEcsSgIdList'] = $this->GEcsSgIdList;
        }

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

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DbInstances'])) {
            if (!empty($map['DbInstances'])) {
                $model->dbInstances = [];
                $n1 = 0;
                foreach ($map['DbInstances'] as $item1) {
                    $model->dbInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EngineInfoList'])) {
            if (!empty($map['EngineInfoList'])) {
                $model->engineInfoList = [];
                $n1 = 0;
                foreach ($map['EngineInfoList'] as $item1) {
                    $model->engineInfoList[$n1] = engineInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GEcsSgIdList'])) {
            $model->GEcsSgIdList = $map['GEcsSgIdList'];
        }

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

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WhitelistNetType'])) {
            $model->whitelistNetType = $map['WhitelistNetType'];
        }

        return $model;
    }
}
