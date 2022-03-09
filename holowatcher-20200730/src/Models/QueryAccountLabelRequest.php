<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountLabelRequest extends Model
{
    /**
     * @var string
     */
    public $labelSeries;

    /**
     * @var int
     */
    public $PK;

    /**
     * @description token 通过聚宝盆申请，预发环境label 查询必须使用
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'labelSeries' => 'LabelSeries',
        'PK'          => 'PK',
        'token'       => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelSeries) {
            $res['LabelSeries'] = $this->labelSeries;
        }
        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAccountLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelSeries'])) {
            $model->labelSeries = $map['LabelSeries'];
        }
        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
