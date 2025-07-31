<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppRequest;

use AlibabaCloud\Tea\Model;

class pageQuery extends Model
{
    /**
     * @description appKey
     *
     * This parameter is required.
     *
     * @example 10121101
     *
     * @var int
     */
    public $appKey;

    /**
     * @example apiName
     *
     * @var string
     */
    public $keyword;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appKey' => 'AppKey',
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
