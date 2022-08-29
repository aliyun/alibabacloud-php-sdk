<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListPublicMediaBasicInfosRequest extends Model
{
    /**
     * @var bool
     */
    public $includeFileBasicInfo;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $mediaTagId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'includeFileBasicInfo' => 'IncludeFileBasicInfo',
        'maxResults'           => 'MaxResults',
        'mediaTagId'           => 'MediaTagId',
        'nextToken'            => 'NextToken',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeFileBasicInfo) {
            $res['IncludeFileBasicInfo'] = $this->includeFileBasicInfo;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->mediaTagId) {
            $res['MediaTagId'] = $this->mediaTagId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublicMediaBasicInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeFileBasicInfo'])) {
            $model->includeFileBasicInfo = $map['IncludeFileBasicInfo'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MediaTagId'])) {
            $model->mediaTagId = $map['MediaTagId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
