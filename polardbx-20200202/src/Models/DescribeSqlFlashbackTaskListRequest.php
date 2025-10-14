<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class DescribeSqlFlashbackTaskListRequest extends Model
{
    /**
     * @var string
     */
    public $polardbxInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'polardbxInstanceId' => 'PolardbxInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polardbxInstanceId) {
            $res['PolardbxInstanceId'] = $this->polardbxInstanceId;
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
        if (isset($map['PolardbxInstanceId'])) {
            $model->polardbxInstanceId = $map['PolardbxInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
