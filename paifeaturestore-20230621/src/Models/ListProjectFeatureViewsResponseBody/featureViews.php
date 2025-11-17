<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectFeatureViewsResponseBody\featureViews\features;

class featureViews extends Model
{
    /**
     * @var string
     */
    public $featureViewId;

    /**
     * @var features[]
     */
    public $features;

    /**
     * @var string
     */
    public $joinId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentJoinId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'featureViewId' => 'FeatureViewId',
        'features' => 'Features',
        'joinId' => 'JoinId',
        'name' => 'Name',
        'parentJoinId' => 'ParentJoinId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->joinId) {
            $res['JoinId'] = $this->joinId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentJoinId) {
            $res['ParentJoinId'] = $this->parentJoinId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = features::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JoinId'])) {
            $model->joinId = $map['JoinId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentJoinId'])) {
            $model->parentJoinId = $map['ParentJoinId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
