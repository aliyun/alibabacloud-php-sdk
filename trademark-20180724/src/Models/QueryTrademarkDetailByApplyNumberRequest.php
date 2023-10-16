<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkDetailByApplyNumberRequest extends Model
{
    /**
     * @var string
     */
    public $applyNumber;

    /**
     * @var string
     */
    public $env;
    protected $_name = [
        'applyNumber' => 'ApplyNumber',
        'env'         => 'Env',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyNumber) {
            $res['ApplyNumber'] = $this->applyNumber;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkDetailByApplyNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyNumber'])) {
            $model->applyNumber = $map['ApplyNumber'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        return $model;
    }
}
