<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticTaskResponseBody extends Model
{
    /**
     * @description Diagnosis ID
     *
     * @example diag-i150553931717380274931
     *
     * @var string
     */
    public $diagnosticId;

    /**
     * @description Request ID
     *
     * @example A511C02A-0127-51AA-A9F9-966382C9A1B5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosticId' => 'DiagnosticId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDiagnosticTaskResponseBody
     */
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
