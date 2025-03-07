<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaByFaceRequest extends Model
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
     * @description The token that is used to identify the query. You can use this parameter in the SearchMediaClipByFace operation to specify the same query conditions.
     *
     * This parameter is required.
     * @example zxtest-huangxuan-2023-3-7-V1
     *
     * @var string
     */
    public $faceSearchToken;

    /**
     * @description The type of the media asset. Valid values:
     *
     *   image
     *   video
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

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
     * @description The URL of the face image.
     *
     * This parameter is required.
     * @example https://****.oss-cn-shanghai.aliyuncs.com/input/huangxuan****.jpg
     *
     * @var string
     */
    public $personImageUrl;

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
        'mediaType'       => 'MediaType',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'personImageUrl'  => 'PersonImageUrl',
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
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->personImageUrl) {
            $res['PersonImageUrl'] = $this->personImageUrl;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaByFaceRequest
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
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PersonImageUrl'])) {
            $model->personImageUrl = $map['PersonImageUrl'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
