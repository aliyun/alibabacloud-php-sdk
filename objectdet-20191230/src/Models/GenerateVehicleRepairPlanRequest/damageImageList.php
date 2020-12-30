<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\GenerateVehicleRepairPlanRequest;

use AlibabaCloud\Tea\Model;

class damageImageList extends Model
{
    /**
     * @var string
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'createTimeStamp' => 'CreateTimeStamp',
        'imageUrl'        => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return damageImageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
