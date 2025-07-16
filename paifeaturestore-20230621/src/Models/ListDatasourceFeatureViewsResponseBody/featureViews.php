<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews\usageStatistics;
use AlibabaCloud\Tea\Model;

class featureViews extends Model
{
    /**
     * @example {"shard_count":5,"replication_count":1}
     *
     * @var string
     */
    public $config;

    /**
     * @example user
     *
     * @var string
     */
    public $featureEntityName;

    /**
     * @example 3
     *
     * @var string
     */
    public $featureViewId;

    /**
     * @example fv1
     *
     * @var string
     */
    public $name;

    /**
     * @example p1
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 86400
     *
     * @var int
     */
    public $TTL;

    /**
     * @example Batch
     *
     * @var string
     */
    public $type;

    /**
     * @var usageStatistics
     */
    public $usageStatistics;
    protected $_name = [
        'config' => 'Config',
        'featureEntityName' => 'FeatureEntityName',
        'featureViewId' => 'FeatureViewId',
        'name' => 'Name',
        'projectName' => 'ProjectName',
        'TTL' => 'TTL',
        'type' => 'Type',
        'usageStatistics' => 'UsageStatistics',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->featureEntityName) {
            $res['FeatureEntityName'] = $this->featureEntityName;
        }
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usageStatistics) {
            $res['UsageStatistics'] = null !== $this->usageStatistics ? $this->usageStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureViews
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['FeatureEntityName'])) {
            $model->featureEntityName = $map['FeatureEntityName'];
        }
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsageStatistics'])) {
            $model->usageStatistics = usageStatistics::fromMap($map['UsageStatistics']);
        }

        return $model;
    }
}
