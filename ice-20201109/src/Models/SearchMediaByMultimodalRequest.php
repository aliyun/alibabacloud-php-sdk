<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaByMultimodalRequest extends Model
{
    /**
     * @description The type of the media assets.
     *
     * Valid values:
     *
     *   image
     *   video (default)
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
     * @description The search library.
     *
     * @example test-1
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description The content that you want to query. You can describe the content in natural language.
     *
     * @var string
     */
    public $text;
    protected $_name = [
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
     * @return SearchMediaByMultimodalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
