<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponseBody\relationships\models;

class relationships extends Model
{
    /**
     * @var string
     */
    public $featureName;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $offlineTableName;

    /**
     * @var string
     */
    public $onlineTableName;
    protected $_name = [
        'featureName' => 'FeatureName',
        'models' => 'Models',
        'offlineTableName' => 'OfflineTableName',
        'onlineTableName' => 'OnlineTableName',
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
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['Models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['Models'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->offlineTableName) {
            $res['OfflineTableName'] = $this->offlineTableName;
        }

        if (null !== $this->onlineTableName) {
            $res['OnlineTableName'] = $this->onlineTableName;
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
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        if (isset($map['Models'])) {
            if (!empty($map['Models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['Models'] as $item1) {
                    $model->models[$n1++] = models::fromMap($item1);
                }
            }
        }

        if (isset($map['OfflineTableName'])) {
            $model->offlineTableName = $map['OfflineTableName'];
        }

        if (isset($map['OnlineTableName'])) {
            $model->onlineTableName = $map['OnlineTableName'];
        }

        return $model;
    }
}
