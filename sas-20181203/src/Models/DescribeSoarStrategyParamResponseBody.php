<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarStrategyParamResponseBody extends Model
{
    /**
     * @description The parameters of the policy.
     *
     * @example {"summary":[{"name":"email","type":"String","isRequired":false,"fromProperty":"notifyConfig.email"}]}
     *
     * @var string
     */
    public $params;

    /**
     * @description The process information of the policy.
     *
     * @example {"edges":[{"level":0,"removeFlag":0,"source":1,"target":8}]}
     *
     * @var string
     */
    public $processInfo;

    /**
     * @description The request ID.
     *
     * @example 6673D49C-A9AB-40DD-B4A2-B92306701AE7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'params' => 'Params',
        'processInfo' => 'ProcessInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->processInfo) {
            $res['ProcessInfo'] = $this->processInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarStrategyParamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ProcessInfo'])) {
            $model->processInfo = $map['ProcessInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
