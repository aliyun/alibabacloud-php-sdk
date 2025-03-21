<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticResultRequest extends Model
{
    /**
     * @example diag-i151942361720577788844
     *
     * @var string
     */
    public $diagnosticId;
    protected $_name = [
        'diagnosticId' => 'DiagnosticId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosticId) {
            $res['DiagnosticId'] = $this->diagnosticId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosticId'])) {
            $model->diagnosticId = $map['DiagnosticId'];
        }

        return $model;
    }
}
