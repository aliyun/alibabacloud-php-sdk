<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSeatInformationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $rowr;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'rowr' => 'Rowr',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->rowr) {
            $res['Rowr'] = $this->rowr;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Rowr'])) {
            $model->rowr = $map['Rowr'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
