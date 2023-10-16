<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkDetailByApplyNumberEspRequest extends Model
{
    /**
     * @var string
     */
    public $applyNumber;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'applyNumber' => 'ApplyNumber',
        'bizType'     => 'BizType',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkDetailByApplyNumberEspRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyNumber'])) {
            $model->applyNumber = $map['ApplyNumber'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
