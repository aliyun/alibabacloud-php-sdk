<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\SubmitCheckResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The operation code of the configuration assessment task.
     *
     *   **Throttling**: frequency limit
     *   **AuthorizationExhaust**: insufficient quota
     *
     * @example Throttling
     *
     * @var string
     */
    public $operateCode;

    /**
     * @description The throttling duration. Unit: seconds.
     *
     * @example 1800
     *
     * @var int
     */
    public $throttlingTimeSecond;
    protected $_name = [
        'operateCode' => 'OperateCode',
        'throttlingTimeSecond' => 'ThrottlingTimeSecond',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }
        if (null !== $this->throttlingTimeSecond) {
            $res['ThrottlingTimeSecond'] = $this->throttlingTimeSecond;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }
        if (isset($map['ThrottlingTimeSecond'])) {
            $model->throttlingTimeSecond = $map['ThrottlingTimeSecond'];
        }

        return $model;
    }
}
