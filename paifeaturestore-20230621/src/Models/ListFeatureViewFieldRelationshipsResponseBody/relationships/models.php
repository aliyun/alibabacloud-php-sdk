<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponseBody\relationships;

use AlibabaCloud\Tea\Model;

class models extends Model
{
    /**
     * @example f1
     *
     * @var string
     */
    public $featureAliasName;

    /**
     * @example 3
     *
     * @var string
     */
    public $modelId;

    /**
     * @example dbmtl
     *
     * @var string
     */
    public $modelName;
    protected $_name = [
        'featureAliasName' => 'FeatureAliasName',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureAliasName) {
            $res['FeatureAliasName'] = $this->featureAliasName;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return models
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureAliasName'])) {
            $model->featureAliasName = $map['FeatureAliasName'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        return $model;
    }
}
