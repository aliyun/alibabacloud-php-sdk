<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\annotations;
use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\groupConfiguration;
use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\joinConfigurations;
use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\labels;
use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\policyConfiguration;
use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\queryList;
use AlibabaCloud\SDK\Sls\V20201230\Models\Configuration\severityConfigurations;
use AlibabaCloud\Tea\Model;

class Configuration extends Model
{
    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var bool
     */
    public $autoAnnotation;

    /**
     * @var string
     */
    public $dashboard;

    /**
     * @var groupConfiguration
     */
    public $groupConfiguration;

    /**
     * @var joinConfigurations[]
     */
    public $joinConfigurations;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var bool
     */
    public $noDataFire;

    /**
     * @var int
     */
    public $noDataSeverity;

    /**
     * @var policyConfiguration
     */
    public $policyConfiguration;

    /**
     * @var queryList
     */
    public $queryList;

    /**
     * @var bool
     */
    public $sendResolved;

    /**
     * @var severityConfigurations[]
     */
    public $severityConfigurations;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'annotations'            => 'annotations',
        'autoAnnotation'         => 'autoAnnotation',
        'dashboard'              => 'dashboard',
        'groupConfiguration'     => 'groupConfiguration',
        'joinConfigurations'     => 'joinConfigurations',
        'labels'                 => 'labels',
        'noDataFire'             => 'noDataFire',
        'noDataSeverity'         => 'noDataSeverity',
        'policyConfiguration'    => 'policyConfiguration',
        'queryList'              => 'queryList',
        'sendResolved'           => 'sendResolved',
        'severityConfigurations' => 'severityConfigurations',
        'tags'                   => 'tags',
        'threshold'              => 'threshold',
        'type'                   => 'type',
        'version'                => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoAnnotation) {
            $res['autoAnnotation'] = $this->autoAnnotation;
        }
        if (null !== $this->dashboard) {
            $res['dashboard'] = $this->dashboard;
        }
        if (null !== $this->groupConfiguration) {
            $res['groupConfiguration'] = null !== $this->groupConfiguration ? $this->groupConfiguration->toMap() : null;
        }
        if (null !== $this->joinConfigurations) {
            $res['joinConfigurations'] = [];
            if (null !== $this->joinConfigurations && \is_array($this->joinConfigurations)) {
                $n = 0;
                foreach ($this->joinConfigurations as $item) {
                    $res['joinConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->noDataFire) {
            $res['noDataFire'] = $this->noDataFire;
        }
        if (null !== $this->noDataSeverity) {
            $res['noDataSeverity'] = $this->noDataSeverity;
        }
        if (null !== $this->policyConfiguration) {
            $res['policyConfiguration'] = null !== $this->policyConfiguration ? $this->policyConfiguration->toMap() : null;
        }
        if (null !== $this->queryList) {
            $res['queryList'] = null !== $this->queryList ? $this->queryList->toMap() : null;
        }
        if (null !== $this->sendResolved) {
            $res['sendResolved'] = $this->sendResolved;
        }
        if (null !== $this->severityConfigurations) {
            $res['severityConfigurations'] = [];
            if (null !== $this->severityConfigurations && \is_array($this->severityConfigurations)) {
                $n = 0;
                foreach ($this->severityConfigurations as $item) {
                    $res['severityConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['autoAnnotation'])) {
            $model->autoAnnotation = $map['autoAnnotation'];
        }
        if (isset($map['dashboard'])) {
            $model->dashboard = $map['dashboard'];
        }
        if (isset($map['groupConfiguration'])) {
            $model->groupConfiguration = groupConfiguration::fromMap($map['groupConfiguration']);
        }
        if (isset($map['joinConfigurations'])) {
            if (!empty($map['joinConfigurations'])) {
                $model->joinConfigurations = [];
                $n                         = 0;
                foreach ($map['joinConfigurations'] as $item) {
                    $model->joinConfigurations[$n++] = null !== $item ? joinConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['noDataFire'])) {
            $model->noDataFire = $map['noDataFire'];
        }
        if (isset($map['noDataSeverity'])) {
            $model->noDataSeverity = $map['noDataSeverity'];
        }
        if (isset($map['policyConfiguration'])) {
            $model->policyConfiguration = policyConfiguration::fromMap($map['policyConfiguration']);
        }
        if (isset($map['queryList'])) {
            $model->queryList = queryList::fromMap($map['queryList']);
        }
        if (isset($map['sendResolved'])) {
            $model->sendResolved = $map['sendResolved'];
        }
        if (isset($map['severityConfigurations'])) {
            if (!empty($map['severityConfigurations'])) {
                $model->severityConfigurations = [];
                $n                             = 0;
                foreach ($map['severityConfigurations'] as $item) {
                    $model->severityConfigurations[$n++] = null !== $item ? severityConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }
        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
