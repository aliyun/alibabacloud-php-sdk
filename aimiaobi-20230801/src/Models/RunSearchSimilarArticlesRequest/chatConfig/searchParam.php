<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest\chatConfig\searchParam\searchSources;

class searchParam extends Model
{
    /**
     * @var string[]
     */
    public $categoryUuids;

    /**
     * @var int
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $createTimeStart;

    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @var string[]
     */
    public $docTypes;

    /**
     * @var string[]
     */
    public $docUuids;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'categoryUuids' => 'CategoryUuids',
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'docIds' => 'DocIds',
        'docTypes' => 'DocTypes',
        'docUuids' => 'DocUuids',
        'endTime' => 'EndTime',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'searchSources' => 'SearchSources',
        'startTime' => 'StartTime',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->categoryUuids)) {
            Model::validateArray($this->categoryUuids);
        }
        if (\is_array($this->docIds)) {
            Model::validateArray($this->docIds);
        }
        if (\is_array($this->docTypes)) {
            Model::validateArray($this->docTypes);
        }
        if (\is_array($this->docUuids)) {
            Model::validateArray($this->docUuids);
        }
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryUuids) {
            if (\is_array($this->categoryUuids)) {
                $res['CategoryUuids'] = [];
                $n1 = 0;
                foreach ($this->categoryUuids as $item1) {
                    $res['CategoryUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->docIds) {
            if (\is_array($this->docIds)) {
                $res['DocIds'] = [];
                $n1 = 0;
                foreach ($this->docIds as $item1) {
                    $res['DocIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docTypes) {
            if (\is_array($this->docTypes)) {
                $res['DocTypes'] = [];
                $n1 = 0;
                foreach ($this->docTypes as $item1) {
                    $res['DocTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docUuids) {
            if (\is_array($this->docUuids)) {
                $res['DocUuids'] = [];
                $n1 = 0;
                foreach ($this->docUuids as $item1) {
                    $res['DocUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }

        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }

        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }

        if (null !== $this->searchSources) {
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1 = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CategoryUuids'])) {
            if (!empty($map['CategoryUuids'])) {
                $model->categoryUuids = [];
                $n1 = 0;
                foreach ($map['CategoryUuids'] as $item1) {
                    $model->categoryUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = [];
                $n1 = 0;
                foreach ($map['DocIds'] as $item1) {
                    $model->docIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocTypes'])) {
            if (!empty($map['DocTypes'])) {
                $model->docTypes = [];
                $n1 = 0;
                foreach ($map['DocTypes'] as $item1) {
                    $model->docTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocUuids'])) {
            if (!empty($map['DocUuids'])) {
                $model->docUuids = [];
                $n1 = 0;
                foreach ($map['DocUuids'] as $item1) {
                    $model->docUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }

        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }

        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }

        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n1 = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1] = searchSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
