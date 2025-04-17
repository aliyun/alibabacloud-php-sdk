<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesRequest\filter;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesRequest\tag;

class ListServicesRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var string
     */
    public $fuzzyKeyword;

    /**
     * @var bool
     */
    public $inUsed;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderByType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceAccessType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'filter' => 'Filter',
        'fuzzyKeyword' => 'FuzzyKeyword',
        'inUsed' => 'InUsed',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderByType' => 'OrderByType',
        'regionId' => 'RegionId',
        'serviceAccessType' => 'ServiceAccessType',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1 = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fuzzyKeyword) {
            $res['FuzzyKeyword'] = $this->fuzzyKeyword;
        }

        if (null !== $this->inUsed) {
            $res['InUsed'] = $this->inUsed;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderByType) {
            $res['OrderByType'] = $this->orderByType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceAccessType) {
            $res['ServiceAccessType'] = $this->serviceAccessType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1 = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1++] = filter::fromMap($item1);
                }
            }
        }

        if (isset($map['FuzzyKeyword'])) {
            $model->fuzzyKeyword = $map['FuzzyKeyword'];
        }

        if (isset($map['InUsed'])) {
            $model->inUsed = $map['InUsed'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderByType'])) {
            $model->orderByType = $map['OrderByType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceAccessType'])) {
            $model->serviceAccessType = $map['ServiceAccessType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
