<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\feature;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The installation information about the feature.
     *
     * @var feature
     */
    public $feature;

    /**
     * @description The status of the feature.
     *
     * @var featureStatus
     */
    public $featureStatus;

    /**
     * @description The feature configurations.
     *
     * @example {}
     *
     * @var string
     */
    public $config;
    protected $_name = [
        'feature' => 'Feature',
        'featureStatus' => 'FeatureStatus',
        'config' => 'config',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = null !== $this->feature ? $this->feature->toMap() : null;
        }
        if (null !== $this->featureStatus) {
            $res['FeatureStatus'] = null !== $this->featureStatus ? $this->featureStatus->toMap() : null;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feature'])) {
            $model->feature = feature::fromMap($map['Feature']);
        }
        if (isset($map['FeatureStatus'])) {
            $model->featureStatus = featureStatus::fromMap($map['FeatureStatus']);
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        return $model;
    }
}
