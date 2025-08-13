<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\ImportFieldResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $failFieldNames;

    /**
     * @var int
     */
    public $successNum;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'failFieldNames' => 'FailFieldNames',
        'successNum' => 'SuccessNum',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failFieldNames) {
            $res['FailFieldNames'] = $this->failFieldNames;
        }

        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
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
        if (isset($map['FailFieldNames'])) {
            $model->failFieldNames = $map['FailFieldNames'];
        }

        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
