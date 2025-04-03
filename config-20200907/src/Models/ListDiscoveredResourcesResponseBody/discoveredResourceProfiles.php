<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListDiscoveredResourcesResponseBody\discoveredResourceProfiles\discoveredResourceProfileList;

class discoveredResourceProfiles extends Model
{
    /**
     * @var discoveredResourceProfileList[]
     */
    public $discoveredResourceProfileList;

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
    public $totalCount;
    protected $_name = [
        'discoveredResourceProfileList' => 'DiscoveredResourceProfileList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->discoveredResourceProfileList)) {
            Model::validateArray($this->discoveredResourceProfileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discoveredResourceProfileList) {
            if (\is_array($this->discoveredResourceProfileList)) {
                $res['DiscoveredResourceProfileList'] = [];
                $n1 = 0;
                foreach ($this->discoveredResourceProfileList as $item1) {
                    $res['DiscoveredResourceProfileList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DiscoveredResourceProfileList'])) {
            if (!empty($map['DiscoveredResourceProfileList'])) {
                $model->discoveredResourceProfileList = [];
                $n1 = 0;
                foreach ($map['DiscoveredResourceProfileList'] as $item1) {
                    $model->discoveredResourceProfileList[$n1++] = discoveredResourceProfileList::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
