<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveGroupDiscoverRulesPreview extends Model
{
    /**
     * @var string
     */
    public $catalogRevision;

    /**
     * @var int
     */
    public $count;

    /**
     * @var ObserveGroupEntitySummary[]
     */
    public $entitySummaries;

    /**
     * @var int
     */
    public $filteredCount;

    /**
     * @var ObserveGroupInstance[]
     */
    public $instances;

    /**
     * @var int
     */
    public $mainCount;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $relatedCount;

    /**
     * @var ObserveGroupRuleCount[]
     */
    public $ruleCounts;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'catalogRevision' => 'catalogRevision',
        'count' => 'count',
        'entitySummaries' => 'entitySummaries',
        'filteredCount' => 'filteredCount',
        'instances' => 'instances',
        'mainCount' => 'mainCount',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'relatedCount' => 'relatedCount',
        'ruleCounts' => 'ruleCounts',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->entitySummaries)) {
            Model::validateArray($this->entitySummaries);
        }
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->ruleCounts)) {
            Model::validateArray($this->ruleCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogRevision) {
            $res['catalogRevision'] = $this->catalogRevision;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->entitySummaries) {
            if (\is_array($this->entitySummaries)) {
                $res['entitySummaries'] = [];
                $n1 = 0;
                foreach ($this->entitySummaries as $item1) {
                    $res['entitySummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filteredCount) {
            $res['filteredCount'] = $this->filteredCount;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mainCount) {
            $res['mainCount'] = $this->mainCount;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->relatedCount) {
            $res['relatedCount'] = $this->relatedCount;
        }

        if (null !== $this->ruleCounts) {
            if (\is_array($this->ruleCounts)) {
                $res['ruleCounts'] = [];
                $n1 = 0;
                foreach ($this->ruleCounts as $item1) {
                    $res['ruleCounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['catalogRevision'])) {
            $model->catalogRevision = $map['catalogRevision'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['entitySummaries'])) {
            if (!empty($map['entitySummaries'])) {
                $model->entitySummaries = [];
                $n1 = 0;
                foreach ($map['entitySummaries'] as $item1) {
                    $model->entitySummaries[$n1] = ObserveGroupEntitySummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['filteredCount'])) {
            $model->filteredCount = $map['filteredCount'];
        }

        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1] = ObserveGroupInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['mainCount'])) {
            $model->mainCount = $map['mainCount'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['relatedCount'])) {
            $model->relatedCount = $map['relatedCount'];
        }

        if (isset($map['ruleCounts'])) {
            if (!empty($map['ruleCounts'])) {
                $model->ruleCounts = [];
                $n1 = 0;
                foreach ($map['ruleCounts'] as $item1) {
                    $model->ruleCounts[$n1] = ObserveGroupRuleCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
