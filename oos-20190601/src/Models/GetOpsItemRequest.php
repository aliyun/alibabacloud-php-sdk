<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class GetOpsItemRequest extends Model
{
    /**
     * @var string
     */
    public $opsItemId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'opsItemId' => 'OpsItemId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opsItemId) {
            $res['OpsItemId'] = $this->opsItemId;
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
        if (isset($map['OpsItemId'])) {
            $model->opsItemId = $map['OpsItemId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
