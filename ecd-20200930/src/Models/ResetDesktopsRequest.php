<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ResetDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $lastRetryTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resetScope;

    /**
     * @var string
     */
    public $resetType;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'desktopId' => 'DesktopId',
        'imageId' => 'ImageId',
        'lastRetryTime' => 'LastRetryTime',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'resetScope' => 'ResetScope',
        'resetType' => 'ResetType',
    ];

    public function validate()
    {
        if (\is_array($this->desktopGroupIds)) {
            Model::validateArray($this->desktopGroupIds);
        }
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupIds) {
            if (\is_array($this->desktopGroupIds)) {
                $res['DesktopGroupIds'] = [];
                $n1 = 0;
                foreach ($this->desktopGroupIds as $item1) {
                    $res['DesktopGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->lastRetryTime) {
            $res['LastRetryTime'] = $this->lastRetryTime;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resetScope) {
            $res['ResetScope'] = $this->resetScope;
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
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
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = [];
                $n1 = 0;
                foreach ($map['DesktopGroupIds'] as $item1) {
                    $model->desktopGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['LastRetryTime'])) {
            $model->lastRetryTime = $map['LastRetryTime'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResetScope'])) {
            $model->resetScope = $map['ResetScope'];
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        return $model;
    }
}
