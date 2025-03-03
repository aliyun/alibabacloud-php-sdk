<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CreateDiagnosticTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $diagnosticId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosticId' => 'DiagnosticId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosticId) {
            $res['DiagnosticId'] = $this->diagnosticId;
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
        if (isset($map['DiagnosticId'])) {
            $model->diagnosticId = $map['DiagnosticId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
