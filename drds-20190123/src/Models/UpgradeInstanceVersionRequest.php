<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class UpgradeInstanceVersionRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rpm;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId' => 'RegionId',
        'rpm' => 'Rpm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rpm) {
            $res['Rpm'] = $this->rpm;
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
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Rpm'])) {
            $model->rpm = $map['Rpm'];
        }

        return $model;
    }
}
