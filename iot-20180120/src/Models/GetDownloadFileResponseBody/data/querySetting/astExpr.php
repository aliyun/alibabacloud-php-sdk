<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data\querySetting;

use AlibabaCloud\Dara\Model;

class astExpr extends Model
{
    /**
     * @var string
     */
    public $expr;

    /**
     * @var string
     */
    public $exprType;
    protected $_name = [
        'expr' => 'Expr',
        'exprType' => 'ExprType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expr) {
            $res['Expr'] = $this->expr;
        }

        if (null !== $this->exprType) {
            $res['ExprType'] = $this->exprType;
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
        if (isset($map['Expr'])) {
            $model->expr = $map['Expr'];
        }

        if (isset($map['ExprType'])) {
            $model->exprType = $map['ExprType'];
        }

        return $model;
    }
}
