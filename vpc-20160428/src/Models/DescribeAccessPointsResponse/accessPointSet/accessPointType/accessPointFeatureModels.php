<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponse\accessPointSet\accessPointType;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponse\accessPointSet\accessPointType\accessPointFeatureModels\accessPointFeatureModel;
use AlibabaCloud\Tea\Model;

class accessPointFeatureModels extends Model
{
    /**
     * @var accessPointFeatureModel[]
     */
    public $accessPointFeatureModel;
    protected $_name = [
        'accessPointFeatureModel' => 'AccessPointFeatureModel',
    ];

    public function validate()
    {
        Model::validateRequired('accessPointFeatureModel', $this->accessPointFeatureModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointFeatureModel) {
            $res['AccessPointFeatureModel'] = [];
            if (null !== $this->accessPointFeatureModel && \is_array($this->accessPointFeatureModel)) {
                $n = 0;
                foreach ($this->accessPointFeatureModel as $item) {
                    $res['AccessPointFeatureModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPointFeatureModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointFeatureModel'])) {
            if (!empty($map['AccessPointFeatureModel'])) {
                $model->accessPointFeatureModel = [];
                $n                              = 0;
                foreach ($map['AccessPointFeatureModel'] as $item) {
                    $model->accessPointFeatureModel[$n++] = null !== $item ? accessPointFeatureModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
