<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceAuthorizedAppsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

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
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
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
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
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
