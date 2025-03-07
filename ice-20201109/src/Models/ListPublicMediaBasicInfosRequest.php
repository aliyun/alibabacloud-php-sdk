<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListPublicMediaBasicInfosRequest extends Model
{
    /**
     * @description The business type of the media asset. Valid values:
     *
     *   sticker
     *   bgm
     *   bgi
     *
     * @example sticker
     *
     * @var string
     */
    public $businessType;

    /**
     * @description Specifies whether to return the basic information of the media asset.
     *
     * @example true
     *
     * @var bool
     */
    public $includeFileBasicInfo;

    /**
     * @description The maximum number of entries to return.
     *
     * Maximum value: 100. Default value: 10.
     * @example 5
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The media tag. All media assets that contain the specified media tag are returned. Valid values:
     *
     *   Sticker tags:
     *
     *   sticker-atmosphere
     *   sticker-bubble
     *   sticker-cute
     *   sticker-daily
     *   sticker-expression
     *   sticker-gif
     *
     *   Background music (BGM) tags:
     *
     *   bgm-romantic
     *   bgm-cuisine
     *   bgm-chinese-style
     *   bgm-upbeat
     *   bgm-dynamic
     *   bgm-relaxing
     *   bgm-quirky
     *   bgm-beauty
     *
     *   Background image (BGI) tags:
     *
     *   bgi-grad
     *   bgi-solid
     *   bgi-pic
     *
     * @example ticker-atmosphere
     *
     * @var string
     */
    public $mediaTagId;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example pSa1SQ0wCe5pzVrQ6mWZEw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'businessType'         => 'BusinessType',
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
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
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
