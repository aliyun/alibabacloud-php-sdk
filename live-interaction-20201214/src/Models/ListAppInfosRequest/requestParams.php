<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 关键字类型，包含appName、appId两类
     *
     * @var string
     */
    public $type;

    /**
     * @description 关键字
     *
     * @var string
     */
    public $keyword;

    /**
     * @description 分页大小，大于0的任意数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 页码，从1开始
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'type'       => 'Type',
        'keyword'    => 'Keyword',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
