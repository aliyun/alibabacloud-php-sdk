<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 总记录数
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description 信息为list<map>类型的json字符串
     *
     * @var string
     */
    public $rows;

    /**
     * @description 当前页数
     *
     * @var int
     */
    public $pageNum;
    protected $_name = [
        'pageSize' => 'PageSize',
        'totalNum' => 'TotalNum',
        'rows'     => 'Rows',
        'pageNum'  => 'PageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        return $model;
    }
}
