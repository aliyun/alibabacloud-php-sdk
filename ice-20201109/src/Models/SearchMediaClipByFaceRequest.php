<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaClipByFaceRequest extends Model
{
    /**
     * @description The ID of the entity.
     *
     * @example 2d3bf1e35a1e42b5ab338d701efa****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The value of this parameter is the same as that of the FaceSearchToken parameter in the SearchMediaByFace request. This specifies to return media asset clips that meet the same query conditions.
     *
     * This parameter is required.
     * @example zxtest-huangxuan-2023-3-7-V1
     *
     * @var string
     */
    public $faceSearchToken;

    /**
     * @description The ID of the media asset.
     *
     * This parameter is required.
     * @example 3b187b3620c8490886cfc2a9578c****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the search library.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'entityId'        => 'EntityId',
        'faceSearchToken' => 'FaceSearchToken',
        'mediaId'         => 'MediaId',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'searchLibName'   => 'SearchLibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->faceSearchToken) {
            $res['FaceSearchToken'] = $this->faceSearchToken;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaClipByFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['FaceSearchToken'])) {
            $model->faceSearchToken = $map['FaceSearchToken'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
