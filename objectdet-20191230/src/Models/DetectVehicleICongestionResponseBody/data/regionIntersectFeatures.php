<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionIntersectFeatures extends Model
{
    /**
     * @var string[]
     */
    public $features;
    protected $_name = [
        'features' => 'Features',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionIntersectFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = $map['Features'];
            }
        }

        return $model;
    }
}
