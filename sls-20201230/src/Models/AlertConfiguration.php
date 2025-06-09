<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class AlertConfiguration extends Model
{
    /**
     * @var AlertTag[]
     */
    public $annotations;

    /**
     * @var bool
     */
    public $autoAnnotation;

    /**
     * @var ConditionConfiguration
     */
    public $conditionConfiguration;

    /**
     * @var string
     */
    public $dashboard;

    /**
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
     * @var int
     */
    public $muteUntil;

    /**
     * @var bool
     */
    public $noDataFire;

    /**
     * @var int
     */
    public $noDataSeverity;

    /**
     * @var PolicyConfiguration
     */
    public $policyConfiguration;

    /**
     * @var AlertQuery[]
     */
    public $queryList;

    /**
     * @var bool
     */
    public $sendResolved;

    /**
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
        'annotations' => 'annotations',
        'autoAnnotation' => 'autoAnnotation',
        'conditionConfiguration' => 'conditionConfiguration',
        'dashboard' => 'dashboard',
        'groupConfiguration' => 'groupConfiguration',
        'joinConfigurations' => 'joinConfigurations',
        'labels' => 'labels',
        'muteUntil' => 'muteUntil',
        'noDataFire' => 'noDataFire',
        'noDataSeverity' => 'noDataSeverity',
        'policyConfiguration' => 'policyConfiguration',
        'queryList' => 'queryList',
        'sendResolved' => 'sendResolved',
        'severityConfigurations' => 'severityConfigurations',
        'sinkAlerthub' => 'sinkAlerthub',
        'sinkCms' => 'sinkCms',
        'sinkEventStore' => 'sinkEventStore',
        'tags' => 'tags',
        'templateConfiguration' => 'templateConfiguration',
        'threshold' => 'threshold',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (null !== $this->conditionConfiguration) {
            $this->conditionConfiguration->validate();
        }
        if (null !== $this->groupConfiguration) {
            $this->groupConfiguration->validate();
        }
        if (\is_array($this->joinConfigurations)) {
            Model::validateArray($this->joinConfigurations);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->policyConfiguration) {
            $this->policyConfiguration->validate();
        }
        if (\is_array($this->queryList)) {
            Model::validateArray($this->queryList);
        }
        if (\is_array($this->severityConfigurations)) {
            Model::validateArray($this->severityConfigurations);
        }
        if (null !== $this->sinkAlerthub) {
            $this->sinkAlerthub->validate();
        }
        if (null !== $this->sinkCms) {
            $this->sinkCms->validate();
        }
        if (null !== $this->sinkEventStore) {
            $this->sinkEventStore->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->templateConfiguration) {
            $this->templateConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['annotations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoAnnotation) {
            $res['autoAnnotation'] = $this->autoAnnotation;
        }

        if (null !== $this->conditionConfiguration) {
            $res['conditionConfiguration'] = null !== $this->conditionConfiguration ? $this->conditionConfiguration->toArray($noStream) : $this->conditionConfiguration;
        }

        if (null !== $this->dashboard) {
            $res['dashboard'] = $this->dashboard;
        }

        if (null !== $this->groupConfiguration) {
            $res['groupConfiguration'] = null !== $this->groupConfiguration ? $this->groupConfiguration->toArray($noStream) : $this->groupConfiguration;
        }

        if (null !== $this->joinConfigurations) {
            if (\is_array($this->joinConfigurations)) {
                $res['joinConfigurations'] = [];
                $n1 = 0;
                foreach ($this->joinConfigurations as $item1) {
                    $res['joinConfigurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['policyConfiguration'] = null !== $this->policyConfiguration ? $this->policyConfiguration->toArray($noStream) : $this->policyConfiguration;
        }

        if (null !== $this->queryList) {
            if (\is_array($this->queryList)) {
                $res['queryList'] = [];
                $n1 = 0;
                foreach ($this->queryList as $item1) {
                    $res['queryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sendResolved) {
            $res['sendResolved'] = $this->sendResolved;
        }

        if (null !== $this->severityConfigurations) {
            if (\is_array($this->severityConfigurations)) {
                $res['severityConfigurations'] = [];
                $n1 = 0;
                foreach ($this->severityConfigurations as $item1) {
                    $res['severityConfigurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sinkAlerthub) {
            $res['sinkAlerthub'] = null !== $this->sinkAlerthub ? $this->sinkAlerthub->toArray($noStream) : $this->sinkAlerthub;
        }

        if (null !== $this->sinkCms) {
            $res['sinkCms'] = null !== $this->sinkCms ? $this->sinkCms->toArray($noStream) : $this->sinkCms;
        }

        if (null !== $this->sinkEventStore) {
            $res['sinkEventStore'] = null !== $this->sinkEventStore ? $this->sinkEventStore->toArray($noStream) : $this->sinkEventStore;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->templateConfiguration) {
            $res['templateConfiguration'] = null !== $this->templateConfiguration ? $this->templateConfiguration->toArray($noStream) : $this->templateConfiguration;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['annotations'] as $item1) {
                    $model->annotations[$n1++] = AlertTag::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['joinConfigurations'] as $item1) {
                    $model->joinConfigurations[$n1++] = JoinConfiguration::fromMap($item1);
                }
            }
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['labels'] as $item1) {
                    $model->labels[$n1++] = AlertTag::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['queryList'] as $item1) {
                    $model->queryList[$n1++] = AlertQuery::fromMap($item1);
                }
            }
        }

        if (isset($map['sendResolved'])) {
            $model->sendResolved = $map['sendResolved'];
        }

        if (isset($map['severityConfigurations'])) {
            if (!empty($map['severityConfigurations'])) {
                $model->severityConfigurations = [];
                $n1 = 0;
                foreach ($map['severityConfigurations'] as $item1) {
                    $model->severityConfigurations[$n1++] = SeverityConfiguration::fromMap($item1);
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
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
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
