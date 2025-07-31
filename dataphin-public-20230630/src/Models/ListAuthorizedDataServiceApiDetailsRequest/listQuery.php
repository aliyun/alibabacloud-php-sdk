<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAuthorizedDataServiceApiDetailsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description AppKey
     *
     * This parameter is required.
     *
     * @example 200000000
     *
     * @var int
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

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
        'page' => 'Page',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
