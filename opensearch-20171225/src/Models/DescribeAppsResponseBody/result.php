<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\cluster;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\dataSources;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\domain;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\firstRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\queryProcessors;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\quota;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\schema;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\schemas;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\secondRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\summaries;
use AlibabaCloud\Tea\Model;

class result extends Model
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
     * @var string
     */
    public $clusterName;

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
    public $id;

    /**
     * @var mixed[]
     */
    public $interpretations;

    /**
     * @var bool
     */
    public $isCurrent;

    /**
     * @var int
     */
    public $progressPercent;

    /**
     * @var mixed[][]
     */
    public $prompts;

    /**
     * @var queryProcessors[]
     */
    public $queryProcessors;

    /**
     * @var quota
     */
    public $quota;

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
     * @var string
     */
    public $status;

    /**
     * @var summaries[]
     */
    public $summaries;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoSwitch'      => 'autoSwitch',
        'cluster'         => 'cluster',
        'clusterName'     => 'clusterName',
        'dataSources'     => 'dataSources',
        'description'     => 'description',
        'domain'          => 'domain',
        'fetchFields'     => 'fetchFields',
        'firstRanks'      => 'firstRanks',
        'id'              => 'id',
        'interpretations' => 'interpretations',
        'isCurrent'       => 'isCurrent',
        'progressPercent' => 'progressPercent',
        'prompts'         => 'prompts',
        'queryProcessors' => 'queryProcessors',
        'quota'           => 'quota',
        'schema'          => 'schema',
        'schemas'         => 'schemas',
        'secondRanks'     => 'secondRanks',
        'status'          => 'status',
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
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->interpretations) {
            $res['interpretations'] = $this->interpretations;
        }
        if (null !== $this->isCurrent) {
            $res['isCurrent'] = $this->isCurrent;
        }
        if (null !== $this->progressPercent) {
            $res['progressPercent'] = $this->progressPercent;
        }
        if (null !== $this->prompts) {
            $res['prompts'] = $this->prompts;
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
     * @return result
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
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['interpretations'])) {
            $model->interpretations = $map['interpretations'];
        }
        if (isset($map['isCurrent'])) {
            $model->isCurrent = $map['isCurrent'];
        }
        if (isset($map['progressPercent'])) {
            $model->progressPercent = $map['progressPercent'];
        }
        if (isset($map['prompts'])) {
            if (!empty($map['prompts'])) {
                $model->prompts = $map['prompts'];
            }
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
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
