<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody\data\querySetting;

use AlibabaCloud\Tea\Model;

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
        'expr'     => 'Expr',
        'exprType' => 'ExprType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return astExpr
     */
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
