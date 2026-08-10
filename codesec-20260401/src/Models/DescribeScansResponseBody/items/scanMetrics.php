<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansResponseBody\items;

use AlibabaCloud\Dara\Model;

class scanMetrics extends Model
{
    /**
     * @var float
     */
    public $credit;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var int
     */
    public $linesOfCode;

    /**
     * @var int
     */
    public $tokenTotal;
    protected $_name = [
        'credit' => 'credit',
        'fileCount' => 'fileCount',
        'linesOfCode' => 'linesOfCode',
        'tokenTotal' => 'tokenTotal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credit) {
            $res['credit'] = $this->credit;
        }

        if (null !== $this->fileCount) {
            $res['fileCount'] = $this->fileCount;
        }

        if (null !== $this->linesOfCode) {
            $res['linesOfCode'] = $this->linesOfCode;
        }

        if (null !== $this->tokenTotal) {
            $res['tokenTotal'] = $this->tokenTotal;
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
        if (isset($map['credit'])) {
            $model->credit = $map['credit'];
        }

        if (isset($map['fileCount'])) {
            $model->fileCount = $map['fileCount'];
        }

        if (isset($map['linesOfCode'])) {
            $model->linesOfCode = $map['linesOfCode'];
        }

        if (isset($map['tokenTotal'])) {
            $model->tokenTotal = $map['tokenTotal'];
        }

        return $model;
    }
}
