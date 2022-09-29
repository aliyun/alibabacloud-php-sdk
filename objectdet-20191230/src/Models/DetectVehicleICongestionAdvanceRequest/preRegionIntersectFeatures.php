<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionAdvanceRequest;

use AlibabaCloud\Tea\Model;

class preRegionIntersectFeatures extends Model
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
     * @return preRegionIntersectFeatures
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
