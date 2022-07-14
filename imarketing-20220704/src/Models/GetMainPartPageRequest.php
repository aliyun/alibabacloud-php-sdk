<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class GetMainPartPageRequest extends Model
{
    /**
     * @var int
     */
    public $mainId;

    /**
     * @var string
     */
    public $mainName;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'mainId'    => 'MainId',
        'mainName'  => 'MainName',
        'pageIndex' => 'PageIndex',
        'pageSize'  => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainId) {
            $res['MainId'] = $this->mainId;
        }
        if (null !== $this->mainName) {
            $res['MainName'] = $this->mainName;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMainPartPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MainId'])) {
            $model->mainId = $map['MainId'];
        }
        if (isset($map['MainName'])) {
            $model->mainName = $map['MainName'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
