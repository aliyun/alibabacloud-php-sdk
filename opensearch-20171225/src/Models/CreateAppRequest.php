<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\cluster;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\dataSources;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\domain;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\firstRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\queryProcessors;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\schema;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\schemas;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\secondRanks;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest\summaries;

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
     * @var mixed[][]
     */
    public $configItems;

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
     * @var mixed[][]
     */
    public $interpretations;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var mixed[][]
     */
    public $prompts;

    /**
     * @var queryProcessors[]
     */
    public $queryProcessors;

    /**
     * @var bool
     */
    public $realtimeShared;

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
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'autoSwitch' => 'autoSwitch',
        'cluster' => 'cluster',
        'configItems' => 'configItems',
        'dataSources' => 'dataSources',
        'description' => 'description',
        'domain' => 'domain',
        'fetchFields' => 'fetchFields',
        'firstRanks' => 'firstRanks',
        'interpretations' => 'interpretations',
        'networkType' => 'networkType',
        'prompts' => 'prompts',
        'queryProcessors' => 'queryProcessors',
        'realtimeShared' => 'realtimeShared',
        'schema' => 'schema',
        'schemas' => 'schemas',
        'secondRanks' => 'secondRanks',
        'summaries' => 'summaries',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (null !== $this->cluster) {
            $this->cluster->validate();
        }
        if (\is_array($this->configItems)) {
            Model::validateArray($this->configItems);
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

        if (null !== $this->configItems) {
            if (\is_array($this->configItems)) {
                $res['configItems'] = [];
                $n1 = 0;
                foreach ($this->configItems as $item1) {
                    if (\is_array($item1)) {
                        $res['configItems'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['configItems'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (null !== $this->interpretations) {
            if (\is_array($this->interpretations)) {
                $res['interpretations'] = [];
                $n1 = 0;
                foreach ($this->interpretations as $item1) {
                    if (\is_array($item1)) {
                        $res['interpretations'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['interpretations'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
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

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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

        if (isset($map['configItems'])) {
            if (!empty($map['configItems'])) {
                $model->configItems = [];
                $n1 = 0;
                foreach ($map['configItems'] as $item1) {
                    if (!empty($item1)) {
                        $model->configItems[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->configItems[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (isset($map['interpretations'])) {
            if (!empty($map['interpretations'])) {
                $model->interpretations = [];
                $n1 = 0;
                foreach ($map['interpretations'] as $item1) {
                    if (!empty($item1)) {
                        $model->interpretations[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->interpretations[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
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

        if (isset($map['realtimeShared'])) {
            $model->realtimeShared = $map['realtimeShared'];
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

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
