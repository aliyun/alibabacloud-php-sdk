<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponseBody\tagSets;
use AlibabaCloud\Tea\Model;

class DescribeTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var tagSets
     */
    public $tagSets;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'totalCount' => 'TotalCount',
        'tagSets'    => 'TagSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->tagSets) {
            $res['TagSets'] = null !== $this->tagSets ? $this->tagSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TagSets'])) {
            $model->tagSets = tagSets::fromMap($map['TagSets']);
        }

        return $model;
    }
}
