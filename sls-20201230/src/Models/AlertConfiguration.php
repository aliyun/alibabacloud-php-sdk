<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class AlertConfiguration extends Model
{
    /**
     * @var AlertTag[]
     */
    public $annotations;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $autoAnnotation;

    /**
     * @var ConditionConfiguration
     */
    public $conditionConfiguration;

    /**
     * @example dasnboardExample
     *
     * @var string
     */
    public $dashboard;

    /**
     * @description This parameter is required.
     *
     * @var GroupConfiguration
     */
    public $groupConfiguration;

    /**
     * @var JoinConfiguration[]
     */
    public $joinConfigurations;

    /**
     * @var AlertTag[]
     */
    public $labels;

    /**
     * @example 1698907508
     *
     * @var int
     */
    public $muteUntil;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $noDataFire;

    /**
     * @example 6
     *
     * @var int
     */
    public $noDataSeverity;

    /**
     * @var PolicyConfiguration
     */
    public $policyConfiguration;

    /**
     * @description This parameter is required.
     *
     * @var AlertQuery[]
     */
    public $queryList;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $sendResolved;

    /**
     * @description This parameter is required.
     *
     * @var SeverityConfiguration[]
     */
    public $severityConfigurations;

    /**
     * @var SinkAlerthubConfiguration
     */
    public $sinkAlerthub;

    /**
     * @var SinkCmsConfiguration
     */
    public $sinkCms;

    /**
     * @var SinkEventStoreConfiguration
     */
    public $sinkEventStore;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var TemplateConfiguration
     */
    public $templateConfiguration;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $threshold;

    /**
     * @example default
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example 2.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'annotations'            => 'annotations',
        'autoAnnotation'         => 'autoAnnotation',
        'conditionConfiguration' => 'conditionConfiguration',
        'dashboard'              => 'dashboard',
        'groupConfiguration'     => 'groupConfiguration',
        'joinConfigurations'     => 'joinConfigurations',
        'labels'                 => 'labels',
        'muteUntil'              => 'muteUntil',
        'noDataFire'             => 'noDataFire',
        'noDataSeverity'         => 'noDataSeverity',
        'policyConfiguration'    => 'policyConfiguration',
        'queryList'              => 'queryList',
        'sendResolved'           => 'sendResolved',
        'severityConfigurations' => 'severityConfigurations',
        'sinkAlerthub'           => 'sinkAlerthub',
        'sinkCms'                => 'sinkCms',
        'sinkEventStore'         => 'sinkEventStore',
        'tags'                   => 'tags',
        'templateConfiguration'  => 'templateConfiguration',
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
        if (null !== $this->conditionConfiguration) {
            $res['conditionConfiguration'] = null !== $this->conditionConfiguration ? $this->conditionConfiguration->toMap() : null;
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
        if (null !== $this->muteUntil) {
            $res['muteUntil'] = $this->muteUntil;
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
            $res['queryList'] = [];
            if (null !== $this->queryList && \is_array($this->queryList)) {
                $n = 0;
                foreach ($this->queryList as $item) {
                    $res['queryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->sinkAlerthub) {
            $res['sinkAlerthub'] = null !== $this->sinkAlerthub ? $this->sinkAlerthub->toMap() : null;
        }
        if (null !== $this->sinkCms) {
            $res['sinkCms'] = null !== $this->sinkCms ? $this->sinkCms->toMap() : null;
        }
        if (null !== $this->sinkEventStore) {
            $res['sinkEventStore'] = null !== $this->sinkEventStore ? $this->sinkEventStore->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->templateConfiguration) {
            $res['templateConfiguration'] = null !== $this->templateConfiguration ? $this->templateConfiguration->toMap() : null;
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
     * @return AlertConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? AlertTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['autoAnnotation'])) {
            $model->autoAnnotation = $map['autoAnnotation'];
        }
        if (isset($map['conditionConfiguration'])) {
            $model->conditionConfiguration = ConditionConfiguration::fromMap($map['conditionConfiguration']);
        }
        if (isset($map['dashboard'])) {
            $model->dashboard = $map['dashboard'];
        }
        if (isset($map['groupConfiguration'])) {
            $model->groupConfiguration = GroupConfiguration::fromMap($map['groupConfiguration']);
        }
        if (isset($map['joinConfigurations'])) {
            if (!empty($map['joinConfigurations'])) {
                $model->joinConfigurations = [];
                $n                         = 0;
                foreach ($map['joinConfigurations'] as $item) {
                    $model->joinConfigurations[$n++] = null !== $item ? JoinConfiguration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? AlertTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['muteUntil'])) {
            $model->muteUntil = $map['muteUntil'];
        }
        if (isset($map['noDataFire'])) {
            $model->noDataFire = $map['noDataFire'];
        }
        if (isset($map['noDataSeverity'])) {
            $model->noDataSeverity = $map['noDataSeverity'];
        }
        if (isset($map['policyConfiguration'])) {
            $model->policyConfiguration = PolicyConfiguration::fromMap($map['policyConfiguration']);
        }
        if (isset($map['queryList'])) {
            if (!empty($map['queryList'])) {
                $model->queryList = [];
                $n                = 0;
                foreach ($map['queryList'] as $item) {
                    $model->queryList[$n++] = null !== $item ? AlertQuery::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sendResolved'])) {
            $model->sendResolved = $map['sendResolved'];
        }
        if (isset($map['severityConfigurations'])) {
            if (!empty($map['severityConfigurations'])) {
                $model->severityConfigurations = [];
                $n                             = 0;
                foreach ($map['severityConfigurations'] as $item) {
                    $model->severityConfigurations[$n++] = null !== $item ? SeverityConfiguration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sinkAlerthub'])) {
            $model->sinkAlerthub = SinkAlerthubConfiguration::fromMap($map['sinkAlerthub']);
        }
        if (isset($map['sinkCms'])) {
            $model->sinkCms = SinkCmsConfiguration::fromMap($map['sinkCms']);
        }
        if (isset($map['sinkEventStore'])) {
            $model->sinkEventStore = SinkEventStoreConfiguration::fromMap($map['sinkEventStore']);
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }
        if (isset($map['templateConfiguration'])) {
            $model->templateConfiguration = TemplateConfiguration::fromMap($map['templateConfiguration']);
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
