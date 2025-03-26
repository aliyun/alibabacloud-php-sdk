<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType\accessPointFeatureModels\accessPointFeatureModel;

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
        if (\is_array($this->accessPointFeatureModel)) {
            Model::validateArray($this->accessPointFeatureModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointFeatureModel) {
            if (\is_array($this->accessPointFeatureModel)) {
                $res['AccessPointFeatureModel'] = [];
                $n1 = 0;
                foreach ($this->accessPointFeatureModel as $item1) {
                    $res['AccessPointFeatureModel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AccessPointFeatureModel'])) {
            if (!empty($map['AccessPointFeatureModel'])) {
                $model->accessPointFeatureModel = [];
                $n1 = 0;
                foreach ($map['AccessPointFeatureModel'] as $item1) {
                    $model->accessPointFeatureModel[$n1++] = accessPointFeatureModel::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
