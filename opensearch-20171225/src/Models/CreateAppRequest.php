<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\cluster;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\dataSources;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\domain;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\firstRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\queryProcessors;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\schema;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\schemas;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\secondRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\summaries;
use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
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
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $description;

    /**
     * @var domain
     */
    public $domain;

    /**
     * @var string[]
     */
    public $fetchFields;

    /**
     * @var firstRanks[]
     */
    public $firstRanks;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var queryProcessors[]
     */
    public $queryProcessors;

    /**
     * @var schema
     */
    public $schema;

    /**
     * @var schemas[]
     */
    public $schemas;

    /**
     * @var secondRanks[]
     */
    public $secondRanks;

    /**
     * @var summaries[]
     */
    public $summaries;

    /**
     * @description Specifies whether to perform a dry run. This parameter is only used to check whether the data source is valid. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;
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
        'schema'          => 'schema',
        'schemas'         => 'schemas',
        'secondRanks'     => 'secondRanks',
        'summaries'       => 'summaries',
        'dryRun'          => 'dryRun',
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
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
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
                    $model->dataSources[$n++] = null !== $item ? dataSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain'])) {
            $model->domain = domain::fromMap($map['domain']);
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
                    $model->firstRanks[$n++] = null !== $item ? firstRanks::fromMap($item) : $item;
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
                    $model->queryProcessors[$n++] = null !== $item ? queryProcessors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['schema'])) {
            $model->schema = schema::fromMap($map['schema']);
        }
        if (isset($map['schemas'])) {
            if (!empty($map['schemas'])) {
                $model->schemas = [];
                $n              = 0;
                foreach ($map['schemas'] as $item) {
                    $model->schemas[$n++] = null !== $item ? schemas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['secondRanks'])) {
            if (!empty($map['secondRanks'])) {
                $model->secondRanks = [];
                $n                  = 0;
                foreach ($map['secondRanks'] as $item) {
                    $model->secondRanks[$n++] = null !== $item ? secondRanks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['summaries'])) {
            if (!empty($map['summaries'])) {
                $model->summaries = [];
                $n                = 0;
                foreach ($map['summaries'] as $item) {
                    $model->summaries[$n++] = null !== $item ? summaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
