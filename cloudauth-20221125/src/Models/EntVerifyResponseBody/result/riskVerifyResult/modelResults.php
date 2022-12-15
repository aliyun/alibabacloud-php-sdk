<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntVerifyResponseBody\result\riskVerifyResult;

use AlibabaCloud\Tea\Model;

class modelResults extends Model
{
    /**
     * @example model_1
     *
     * @var string
     */
    public $modelName;

    /**
     * @example 9999
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'modelName' => 'ModelName',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
