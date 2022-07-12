<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ResetDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $imageId;

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
    public $resetType;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'desktopId'      => 'DesktopId',
        'imageId'        => 'ImageId',
        'payType'        => 'PayType',
        'regionId'       => 'RegionId',
        'resetType'      => 'ResetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        return $model;
    }
}
