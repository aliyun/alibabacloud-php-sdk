<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectMembersRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $env;

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
        'env' => 'Env',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
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
