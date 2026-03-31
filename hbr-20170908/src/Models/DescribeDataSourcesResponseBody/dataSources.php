<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;

class dataSources extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $connectionInfo;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $exclude;

    /**
     * @var string
     */
    public $include;

    /**
     * @var bool
     */
    public $indexAvailable;

    /**
     * @var string
     */
    public $indexLevel;

    /**
     * @var bool
     */
    public $indexUpdateTime;

    /**
     * @var bool
     */
    public $indexing;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $schedule;

    /**
     * @var string
     */
    public $speedLimit;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'connectionInfo' => 'ConnectionInfo',
        'createdTime' => 'CreatedTime',
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'dataSourceType' => 'DataSourceType',
        'exclude' => 'Exclude',
        'include' => 'Include',
        'indexAvailable' => 'IndexAvailable',
        'indexLevel' => 'IndexLevel',
        'indexUpdateTime' => 'IndexUpdateTime',
        'indexing' => 'Indexing',
        'options' => 'Options',
        'paths' => 'Paths',
        'planId' => 'PlanId',
        'schedule' => 'Schedule',
        'speedLimit' => 'SpeedLimit',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->connectionInfo) {
            $res['ConnectionInfo'] = $this->connectionInfo;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->indexAvailable) {
            $res['IndexAvailable'] = $this->indexAvailable;
        }

        if (null !== $this->indexLevel) {
            $res['IndexLevel'] = $this->indexLevel;
        }

        if (null !== $this->indexUpdateTime) {
            $res['IndexUpdateTime'] = $this->indexUpdateTime;
        }

        if (null !== $this->indexing) {
            $res['Indexing'] = $this->indexing;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConnectionInfo'])) {
            $model->connectionInfo = $map['ConnectionInfo'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['IndexAvailable'])) {
            $model->indexAvailable = $map['IndexAvailable'];
        }

        if (isset($map['IndexLevel'])) {
            $model->indexLevel = $map['IndexLevel'];
        }

        if (isset($map['IndexUpdateTime'])) {
            $model->indexUpdateTime = $map['IndexUpdateTime'];
        }

        if (isset($map['Indexing'])) {
            $model->indexing = $map['Indexing'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
