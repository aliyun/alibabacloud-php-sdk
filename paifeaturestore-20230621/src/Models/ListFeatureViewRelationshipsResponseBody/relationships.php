<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponseBody\relationships\models;

class relationships extends Model
{
    /**
     * @var string
     */
    public $featureViewName;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'featureViewName' => 'FeatureViewName',
        'models' => 'Models',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureViewName) {
            $res['FeatureViewName'] = $this->featureViewName;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['Models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['Models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['FeatureViewName'])) {
            $model->featureViewName = $map['FeatureViewName'];
        }

        if (isset($map['Models'])) {
            if (!empty($map['Models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['Models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
