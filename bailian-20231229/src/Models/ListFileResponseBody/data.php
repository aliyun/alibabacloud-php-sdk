<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponseBody\data\fileList;

class data extends Model
{
    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @var bool
     */
    public $hasNext;

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
        'fileList' => 'FileList',
        'hasNext' => 'HasNext',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileList) {
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1 = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
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
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n1 = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1] = fileList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
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
