<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\App\cluster;
use AlibabaCloud\Tea\Model;

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
        'autoSwitch'      => 'autoSwitch',
        'cluster'         => 'cluster',
        'dataSources'     => 'dataSources',
        'description'     => 'description',
        'domain'          => 'domain',
        'fetchFields'     => 'fetchFields',
        'firstRanks'      => 'firstRanks',
        'networkType'     => 'networkType',
        'queryProcessors' => 'queryProcessors',
        'quota'           => 'quota',
        'realtimeShared'  => 'realtimeShared',
        'schema'          => 'schema',
        'schemas'         => 'schemas',
        'secondRanks'     => 'secondRanks',
        'summaries'       => 'summaries',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSwitch) {
            $res['autoSwitch'] = $this->autoSwitch;
        }
        if (null !== $this->cluster) {
            $res['cluster'] = null !== $this->cluster ? $this->cluster->toMap() : null;
        }
        if (null !== $this->dataSources) {
            $res['dataSources'] = [];
            if (null !== $this->dataSources && \is_array($this->dataSources)) {
                $n = 0;
                foreach ($this->dataSources as $item) {
                    $res['dataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['domain'] = null !== $this->domain ? $this->domain->toMap() : null;
        }
        if (null !== $this->fetchFields) {
            $res['fetchFields'] = $this->fetchFields;
        }
        if (null !== $this->firstRanks) {
            $res['firstRanks'] = [];
            if (null !== $this->firstRanks && \is_array($this->firstRanks)) {
                $n = 0;
                foreach ($this->firstRanks as $item) {
                    $res['firstRanks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->queryProcessors) {
            $res['queryProcessors'] = [];
            if (null !== $this->queryProcessors && \is_array($this->queryProcessors)) {
                $n = 0;
                foreach ($this->queryProcessors as $item) {
                    $res['queryProcessors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->realtimeShared) {
            $res['realtimeShared'] = $this->realtimeShared;
        }
        if (null !== $this->schema) {
            $res['schema'] = null !== $this->schema ? $this->schema->toMap() : null;
        }
        if (null !== $this->schemas) {
            $res['schemas'] = [];
            if (null !== $this->schemas && \is_array($this->schemas)) {
                $n = 0;
                foreach ($this->schemas as $item) {
                    $res['schemas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->secondRanks) {
            $res['secondRanks'] = [];
            if (null !== $this->secondRanks && \is_array($this->secondRanks)) {
                $n = 0;
                foreach ($this->secondRanks as $item) {
                    $res['secondRanks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summaries) {
            $res['summaries'] = [];
            if (null !== $this->summaries && \is_array($this->summaries)) {
                $n = 0;
                foreach ($this->summaries as $item) {
                    $res['summaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return App
     */
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
                $n                  = 0;
                foreach ($map['dataSources'] as $item) {
                    $model->dataSources[$n++] = null !== $item ? DataSource::fromMap($item) : $item;
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
                $model->fetchFields = $map['fetchFields'];
            }
        }
        if (isset($map['firstRanks'])) {
            if (!empty($map['firstRanks'])) {
                $model->firstRanks = [];
                $n                 = 0;
                foreach ($map['firstRanks'] as $item) {
                    $model->firstRanks[$n++] = null !== $item ? FirstRank::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['queryProcessors'])) {
            if (!empty($map['queryProcessors'])) {
                $model->queryProcessors = [];
                $n                      = 0;
                foreach ($map['queryProcessors'] as $item) {
                    $model->queryProcessors[$n++] = null !== $item ? QueryProcessor::fromMap($item) : $item;
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
                $n              = 0;
                foreach ($map['schemas'] as $item) {
                    $model->schemas[$n++] = null !== $item ? Schema::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['secondRanks'])) {
            if (!empty($map['secondRanks'])) {
                $model->secondRanks = [];
                $n                  = 0;
                foreach ($map['secondRanks'] as $item) {
                    $model->secondRanks[$n++] = null !== $item ? SecondRank::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['summaries'])) {
            if (!empty($map['summaries'])) {
                $model->summaries = [];
                $n                = 0;
                foreach ($map['summaries'] as $item) {
                    $model->summaries[$n++] = null !== $item ? Summary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
