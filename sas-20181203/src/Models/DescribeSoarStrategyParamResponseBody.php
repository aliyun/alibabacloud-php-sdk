<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSoarStrategyParamResponseBody extends Model
{
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $processInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'params'      => 'Params',
        'processInfo' => 'ProcessInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
