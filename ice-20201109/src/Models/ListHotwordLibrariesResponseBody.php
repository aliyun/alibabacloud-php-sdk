<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListHotwordLibrariesResponseBody\hotwordLibraryList;

class ListHotwordLibrariesResponseBody extends Model
{
    /**
     * @var hotwordLibraryList[]
     */
    public $hotwordLibraryList;

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
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hotwordLibraryList' => 'HotwordLibraryList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->hotwordLibraryList)) {
            Model::validateArray($this->hotwordLibraryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotwordLibraryList) {
            if (\is_array($this->hotwordLibraryList)) {
                $res['HotwordLibraryList'] = [];
                $n1 = 0;
                foreach ($this->hotwordLibraryList as $item1) {
                    $res['HotwordLibraryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['HotwordLibraryList'])) {
            if (!empty($map['HotwordLibraryList'])) {
                $model->hotwordLibraryList = [];
                $n1 = 0;
                foreach ($map['HotwordLibraryList'] as $item1) {
                    $model->hotwordLibraryList[$n1++] = hotwordLibraryList::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
