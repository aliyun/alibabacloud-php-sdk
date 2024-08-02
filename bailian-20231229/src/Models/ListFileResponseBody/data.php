<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponseBody\data\fileList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 4jzbJk9J6lNeuXD9hP0viA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 48
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fileList'   => 'FileList',
        'hasNext'    => 'HasNext',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
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
