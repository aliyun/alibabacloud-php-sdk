<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeExcelRecordRequest extends Model
{
    /**
     * @description 页码
     *
     * @var int
     */
    public $currPage;

    /**
     * @description 每页数据
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currPage' => 'CurrPage',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currPage) {
            $res['CurrPage'] = $this->currPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeExcelRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrPage'])) {
            $model->currPage = $map['CurrPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
