<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaByHybridRequest extends Model
{
    /**
     * @description The ID of the media asset. The details of the media asset are returned.
     *
     * @example ****c469e944b5a856828dc2****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example test-1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'mediaId'       => 'MediaId',
        'mediaType'     => 'MediaType',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'searchLibName' => 'SearchLibName',
        'text'          => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaByHybridRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
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
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
