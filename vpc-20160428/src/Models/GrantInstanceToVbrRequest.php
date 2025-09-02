<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class GrantInstanceToVbrRequest extends Model
{
    /**
     * @var string
     */
    public $grantType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vbrInstanceIds;

    /**
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'grantType' => 'GrantType',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'vbrInstanceIds' => 'VbrInstanceIds',
        'vbrOwnerUid' => 'VbrOwnerUid',
        'vbrRegionNo' => 'VbrRegionNo',
    ];

    public function validate()
    {
        if (\is_array($this->vbrInstanceIds)) {
            Model::validateArray($this->vbrInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vbrInstanceIds) {
            if (\is_array($this->vbrInstanceIds)) {
                $res['VbrInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->vbrInstanceIds as $item1) {
                    $res['VbrInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }

        if (null !== $this->vbrRegionNo) {
            $res['VbrRegionNo'] = $this->vbrRegionNo;
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
        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VbrInstanceIds'])) {
            if (!empty($map['VbrInstanceIds'])) {
                $model->vbrInstanceIds = [];
                $n1 = 0;
                foreach ($map['VbrInstanceIds'] as $item1) {
                    $model->vbrInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }

        if (isset($map['VbrRegionNo'])) {
            $model->vbrRegionNo = $map['VbrRegionNo'];
        }

        return $model;
    }
}
