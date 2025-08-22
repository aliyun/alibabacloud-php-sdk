<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\feature;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus;

class data extends Model
{
    /**
     * @var feature
     */
    public $feature;

    /**
     * @var featureStatus
     */
    public $featureStatus;

    /**
     * @var string
     */
    public $config;
    protected $_name = [
        'feature' => 'Feature',
        'featureStatus' => 'FeatureStatus',
        'config' => 'config',
    ];

    public function validate()
    {
        if (null !== $this->feature) {
            $this->feature->validate();
        }
        if (null !== $this->featureStatus) {
            $this->featureStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = null !== $this->feature ? $this->feature->toArray($noStream) : $this->feature;
        }

        if (null !== $this->featureStatus) {
            $res['FeatureStatus'] = null !== $this->featureStatus ? $this->featureStatus->toArray($noStream) : $this->featureStatus;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
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
