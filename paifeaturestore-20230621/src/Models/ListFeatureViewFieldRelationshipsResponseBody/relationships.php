<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewFieldRelationshipsResponseBody\relationships\models;
use AlibabaCloud\Tea\Model;

class relationships extends Model
{
    /**
     * @example featureView1
     *
     * @var string
     */
    public $featureName;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @example table2
     *
     * @var string
     */
    public $offlineTableName;

    /**
     * @example table1
     *
     * @var string
     */
    public $onlineTableName;
    protected $_name = [
        'featureName'      => 'FeatureName',
        'models'           => 'Models',
        'offlineTableName' => 'OfflineTableName',
        'onlineTableName'  => 'OnlineTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
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
        if (null !== $this->offlineTableName) {
            $res['OfflineTableName'] = $this->offlineTableName;
        }
        if (null !== $this->onlineTableName) {
            $res['OnlineTableName'] = $this->onlineTableName;
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
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
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
        if (isset($map['OfflineTableName'])) {
            $model->offlineTableName = $map['OfflineTableName'];
        }
        if (isset($map['OnlineTableName'])) {
            $model->onlineTableName = $map['OnlineTableName'];
        }

        return $model;
    }
}
