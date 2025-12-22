<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\App\cluster;

class App extends Model
{
    /**
     * @var bool
     */
    public $autoSwitch;

    /**
     * @var cluster
     */
    public $cluster;

    /**
     * @var DataSource[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Domain
     */
    public $domain;

    /**
     * @var string[]
     */
    public $fetchFields;

    /**
     * @var FirstRank[]
     */
    public $firstRanks;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var QueryProcessor[]
     */
    public $queryProcessors;

    /**
     * @var Quota
     */
    public $quota;

    /**
     * @var bool
     */
    public $realtimeShared;

    /**
     * @var Schema
     */
    public $schema;

    /**
     * @var Schema[]
     */
    public $schemas;

    /**
     * @var SecondRank[]
     */
    public $secondRanks;

    /**
     * @var Summary[]
     */
    public $summaries;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoSwitch' => 'autoSwitch',
        'cluster' => 'cluster',
        'dataSources' => 'dataSources',
        'description' => 'description',
        'domain' => 'domain',
        'fetchFields' => 'fetchFields',
        'firstRanks' => 'firstRanks',
        'networkType' => 'networkType',
        'queryProcessors' => 'queryProcessors',
        'quota' => 'quota',
        'realtimeShared' => 'realtimeShared',
        'schema' => 'schema',
        'schemas' => 'schemas',
        'secondRanks' => 'secondRanks',
        'summaries' => 'summaries',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->cluster) {
            $this->cluster->validate();
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (null !== $this->domain) {
            $this->domain->validate();
        }
        if (\is_array($this->fetchFields)) {
            Model::validateArray($this->fetchFields);
        }
        if (\is_array($this->firstRanks)) {
            Model::validateArray($this->firstRanks);
        }
        if (\is_array($this->queryProcessors)) {
            Model::validateArray($this->queryProcessors);
        }
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        if (null !== $this->schema) {
            $this->schema->validate();
        }
        if (\is_array($this->schemas)) {
            Model::validateArray($this->schemas);
        }
        if (\is_array($this->secondRanks)) {
            Model::validateArray($this->secondRanks);
        }
        if (\is_array($this->summaries)) {
            Model::validateArray($this->summaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSwitch) {
            $res['autoSwitch'] = $this->autoSwitch;
        }

        if (null !== $this->cluster) {
            $res['cluster'] = null !== $this->cluster ? $this->cluster->toArray($noStream) : $this->cluster;
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['dataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['dataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domain) {
            $res['domain'] = null !== $this->domain ? $this->domain->toArray($noStream) : $this->domain;
        }

        if (null !== $this->fetchFields) {
            if (\is_array($this->fetchFields)) {
                $res['fetchFields'] = [];
                $n1 = 0;
                foreach ($this->fetchFields as $item1) {
                    $res['fetchFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firstRanks) {
            if (\is_array($this->firstRanks)) {
                $res['firstRanks'] = [];
                $n1 = 0;
                foreach ($this->firstRanks as $item1) {
                    $res['firstRanks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        if (null !== $this->queryProcessors) {
            if (\is_array($this->queryProcessors)) {
                $res['queryProcessors'] = [];
                $n1 = 0;
                foreach ($this->queryProcessors as $item1) {
                    $res['queryProcessors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
        }

        if (null !== $this->realtimeShared) {
            $res['realtimeShared'] = $this->realtimeShared;
        }

        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toArray($noStream) : $this->schema;
        }

        if (null !== $this->schemas) {
            if (\is_array($this->schemas)) {
                $res['schemas'] = [];
                $n1 = 0;
                foreach ($this->schemas as $item1) {
                    $res['schemas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secondRanks) {
            if (\is_array($this->secondRanks)) {
                $res['secondRanks'] = [];
                $n1 = 0;
                foreach ($this->secondRanks as $item1) {
                    $res['secondRanks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summaries) {
            if (\is_array($this->summaries)) {
                $res['summaries'] = [];
                $n1 = 0;
                foreach ($this->summaries as $item1) {
                    $res['summaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['autoSwitch'])) {
            $model->autoSwitch = $map['autoSwitch'];
        }

        if (isset($map['cluster'])) {
            $model->cluster = cluster::fromMap($map['cluster']);
        }

        if (isset($map['dataSources'])) {
            if (!empty($map['dataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['dataSources'] as $item1) {
                    $model->dataSources[$n1] = DataSource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domain'])) {
            $model->domain = Domain::fromMap($map['domain']);
        }

        if (isset($map['fetchFields'])) {
            if (!empty($map['fetchFields'])) {
                $model->fetchFields = [];
                $n1 = 0;
                foreach ($map['fetchFields'] as $item1) {
                    $model->fetchFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['firstRanks'])) {
            if (!empty($map['firstRanks'])) {
                $model->firstRanks = [];
                $n1 = 0;
                foreach ($map['firstRanks'] as $item1) {
                    $model->firstRanks[$n1] = FirstRank::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        if (isset($map['queryProcessors'])) {
            if (!empty($map['queryProcessors'])) {
                $model->queryProcessors = [];
                $n1 = 0;
                foreach ($map['queryProcessors'] as $item1) {
                    $model->queryProcessors[$n1] = QueryProcessor::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['quota'])) {
            $model->quota = Quota::fromMap($map['quota']);
        }

        if (isset($map['realtimeShared'])) {
            $model->realtimeShared = $map['realtimeShared'];
        }

        if (isset($map['schema'])) {
            $model->schema = Schema::fromMap($map['schema']);
        }

        if (isset($map['schemas'])) {
            if (!empty($map['schemas'])) {
                $model->schemas = [];
                $n1 = 0;
                foreach ($map['schemas'] as $item1) {
                    $model->schemas[$n1] = Schema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['secondRanks'])) {
            if (!empty($map['secondRanks'])) {
                $model->secondRanks = [];
                $n1 = 0;
                foreach ($map['secondRanks'] as $item1) {
                    $model->secondRanks[$n1] = SecondRank::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['summaries'])) {
            if (!empty($map['summaries'])) {
                $model->summaries = [];
                $n1 = 0;
                foreach ($map['summaries'] as $item1) {
                    $model->summaries[$n1] = Summary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
