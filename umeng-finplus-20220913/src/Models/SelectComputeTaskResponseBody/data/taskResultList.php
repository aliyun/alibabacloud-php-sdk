<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskResultList extends Model
{
    /**
     * @var int
     */
    public $bcId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $lineNum;
    protected $_name = [
        'bcId' => 'bcId',
        'code' => 'code',
        'lineNum' => 'lineNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bcId) {
            $res['bcId'] = $this->bcId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->lineNum) {
            $res['lineNum'] = $this->lineNum;
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
        if (isset($map['bcId'])) {
            $model->bcId = $map['bcId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['lineNum'])) {
            $model->lineNum = $map['lineNum'];
        }

        return $model;
    }
}
