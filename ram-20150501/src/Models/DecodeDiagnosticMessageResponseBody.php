<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage;
use AlibabaCloud\Tea\Model;

class DecodeDiagnosticMessageResponseBody extends Model
{
    /**
     * @description The decoded diagnostic information.
     *
     * @var decodedDiagnosticMessage
     */
    public $decodedDiagnosticMessage;

    /**
     * @description The request ID.
     *
     * @example D2331703-AADF-5564-BA9B-26CD51A33BA0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'decodedDiagnosticMessage' => 'DecodedDiagnosticMessage',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->decodedDiagnosticMessage) {
            $res['DecodedDiagnosticMessage'] = null !== $this->decodedDiagnosticMessage ? $this->decodedDiagnosticMessage->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecodeDiagnosticMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DecodedDiagnosticMessage'])) {
            $model->decodedDiagnosticMessage = decodedDiagnosticMessage::fromMap($map['DecodedDiagnosticMessage']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
