<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DecodeDiagnosticMessageRequest extends Model
{
    /**
     * @description The encoded diagnostic information in the response that contains an access denied error. The error is caused by no RAM permissions.
     *
     * @example AQEAAAAAZBgxr0U1MjA1NTM1LUM4BBktMzE5RS1CODgxLUU1QTI0RDNFQTM1****
     *
     * @var string
     */
    public $encodedDiagnosticMessage;
    protected $_name = [
        'encodedDiagnosticMessage' => 'EncodedDiagnosticMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodedDiagnosticMessage) {
            $res['EncodedDiagnosticMessage'] = $this->encodedDiagnosticMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecodeDiagnosticMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodedDiagnosticMessage'])) {
            $model->encodedDiagnosticMessage = $map['EncodedDiagnosticMessage'];
        }

        return $model;
    }
}
