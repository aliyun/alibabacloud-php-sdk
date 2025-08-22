<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteRumAppRequest extends Model
{
    /**
     * @var string
     */
    public $appGroup;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $realRegionId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appGroup' => 'AppGroup',
        'appId' => 'AppId',
        'realRegionId' => 'RealRegionId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->realRegionId) {
            $res['RealRegionId'] = $this->realRegionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['RealRegionId'])) {
            $model->realRegionId = $map['RealRegionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
