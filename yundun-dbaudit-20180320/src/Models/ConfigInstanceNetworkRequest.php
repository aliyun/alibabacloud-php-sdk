<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class ConfigInstanceNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $privateWhiteList;

    /**
     * @var int
     */
    public $publicAccessControl;

    /**
     * @var string[]
     */
    public $publicWhiteList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $securityGroupIds;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'privateWhiteList' => 'PrivateWhiteList',
        'publicAccessControl' => 'PublicAccessControl',
        'publicWhiteList' => 'PublicWhiteList',
        'regionId' => 'RegionId',
        'securityGroupIds' => 'SecurityGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->privateWhiteList)) {
            Model::validateArray($this->privateWhiteList);
        }
        if (\is_array($this->publicWhiteList)) {
            Model::validateArray($this->publicWhiteList);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->privateWhiteList) {
            if (\is_array($this->privateWhiteList)) {
                $res['PrivateWhiteList'] = [];
                $n1 = 0;
                foreach ($this->privateWhiteList as $item1) {
                    $res['PrivateWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicAccessControl) {
            $res['PublicAccessControl'] = $this->publicAccessControl;
        }

        if (null !== $this->publicWhiteList) {
            if (\is_array($this->publicWhiteList)) {
                $res['PublicWhiteList'] = [];
                $n1 = 0;
                foreach ($this->publicWhiteList as $item1) {
                    $res['PublicWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PrivateWhiteList'])) {
            if (!empty($map['PrivateWhiteList'])) {
                $model->privateWhiteList = [];
                $n1 = 0;
                foreach ($map['PrivateWhiteList'] as $item1) {
                    $model->privateWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicAccessControl'])) {
            $model->publicAccessControl = $map['PublicAccessControl'];
        }

        if (isset($map['PublicWhiteList'])) {
            if (!empty($map['PublicWhiteList'])) {
                $model->publicWhiteList = [];
                $n1 = 0;
                foreach ($map['PublicWhiteList'] as $item1) {
                    $model->publicWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
