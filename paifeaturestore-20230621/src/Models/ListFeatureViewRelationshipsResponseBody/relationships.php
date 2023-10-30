<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponseBody\relationships\models;
use AlibabaCloud\Tea\Model;

class relationships extends Model
{
    /**
     * @example fv1
     *
     * @var string
     */
    public $featureViewName;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @example project1
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'featureViewName' => 'FeatureViewName',
        'models'          => 'Models',
        'projectName'     => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureViewName) {
            $res['FeatureViewName'] = $this->featureViewName;
        }
        if (null !== $this->models) {
            $res['Models'] = [];
            if (null !== $this->models && \is_array($this->models)) {
                $n = 0;
                foreach ($this->models as $item) {
                    $res['Models'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationships
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureViewName'])) {
            $model->featureViewName = $map['FeatureViewName'];
        }
        if (isset($map['Models'])) {
            if (!empty($map['Models'])) {
                $model->models = [];
                $n             = 0;
                foreach ($map['Models'] as $item) {
                    $model->models[$n++] = null !== $item ? models::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
