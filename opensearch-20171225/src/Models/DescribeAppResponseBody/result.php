<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\cluster;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\dataSources;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\firstRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\queryProcessors;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\quota;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\schema;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\schemas;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\secondRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\summaries;

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
        'autoSwitch' => 'autoSwitch',
        'cluster' => 'cluster',
        'clusterName' => 'clusterName',
        'dataSources' => 'dataSources',
        'description' => 'description',
        'domain' => 'domain',
        'fetchFields' => 'fetchFields',
        'firstRanks' => 'firstRanks',
        'id' => 'id',
        'interpretations' => 'interpretations',
        'isCurrent' => 'isCurrent',
        'progressPercent' => 'progressPercent',
        'prompts' => 'prompts',
        'queryProcessors' => 'queryProcessors',
        'quota' => 'quota',
        'schema' => 'schema',
        'schemas' => 'schemas',
        'secondRanks' => 'secondRanks',
        'status' => 'status',
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
        if (\is_array($this->interpretations)) {
            Model::validateArray($this->interpretations);
        }
        if (\is_array($this->prompts)) {
            Model::validateArray($this->prompts);
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

        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->interpretations) {
            if (\is_array($this->interpretations)) {
                $res['interpretations'] = [];
                foreach ($this->interpretations as $key1 => $value1) {
                    $res['interpretations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->isCurrent) {
            $res['isCurrent'] = $this->isCurrent;
        }

        if (null !== $this->progressPercent) {
            $res['progressPercent'] = $this->progressPercent;
        }

        if (null !== $this->prompts) {
            if (\is_array($this->prompts)) {
                $res['prompts'] = [];
                $n1 = 0;
                foreach ($this->prompts as $item1) {
                    if (\is_array($item1)) {
                        $res['prompts'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['prompts'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }

        if (isset($map['dataSources'])) {
            if (!empty($map['dataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['dataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
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
                    $model->firstRanks[$n1] = firstRanks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['interpretations'])) {
            if (!empty($map['interpretations'])) {
                $model->interpretations = [];
                foreach ($map['interpretations'] as $key1 => $value1) {
                    $model->interpretations[$key1] = $value1;
                }
            }
        }

        if (isset($map['isCurrent'])) {
            $model->isCurrent = $map['isCurrent'];
        }

        if (isset($map['progressPercent'])) {
            $model->progressPercent = $map['progressPercent'];
        }

        if (isset($map['prompts'])) {
            if (!empty($map['prompts'])) {
                $model->prompts = [];
                $n1 = 0;
                foreach ($map['prompts'] as $item1) {
                    if (!empty($item1)) {
                        $model->prompts[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->prompts[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['queryProcessors'])) {
            if (!empty($map['queryProcessors'])) {
                $model->queryProcessors = [];
                $n1 = 0;
                foreach ($map['queryProcessors'] as $item1) {
                    $model->queryProcessors[$n1] = queryProcessors::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['schemas'] as $item1) {
                    $model->schemas[$n1] = schemas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['secondRanks'])) {
            if (!empty($map['secondRanks'])) {
                $model->secondRanks = [];
                $n1 = 0;
                foreach ($map['secondRanks'] as $item1) {
                    $model->secondRanks[$n1] = secondRanks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['summaries'])) {
            if (!empty($map['summaries'])) {
                $model->summaries = [];
                $n1 = 0;
                foreach ($map['summaries'] as $item1) {
                    $model->summaries[$n1] = summaries::fromMap($item1);
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
