<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class AddDataSourceRequest extends Model
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
     * @var string
     */
    public $credential;

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
     * @var string
     */
    public $indexLevel;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string[]
     */
    public $path;

    /**
     * @var string
     */
    public $schedule;

    /**
     * @var string
     */
    public $speedLimit;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'connectionInfo' => 'ConnectionInfo',
        'credential' => 'Credential',
        'dataSourceName' => 'DataSourceName',
        'dataSourceType' => 'DataSourceType',
        'exclude' => 'Exclude',
        'include' => 'Include',
        'indexLevel' => 'IndexLevel',
        'options' => 'Options',
        'path' => 'Path',
        'schedule' => 'Schedule',
        'speedLimit' => 'SpeedLimit',
    ];

    public function validate()
    {
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
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

        if (null !== $this->credential) {
            $res['Credential'] = $this->credential;
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

        if (null !== $this->indexLevel) {
            $res['IndexLevel'] = $this->indexLevel;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
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

        if (isset($map['Credential'])) {
            $model->credential = $map['Credential'];
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

        if (isset($map['IndexLevel'])) {
            $model->indexLevel = $map['IndexLevel'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }

        return $model;
    }
}
