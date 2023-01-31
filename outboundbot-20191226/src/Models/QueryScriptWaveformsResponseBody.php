<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptWaveformsResponseBody\scriptWaveforms;
use AlibabaCloud\Tea\Model;

class QueryScriptWaveformsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scriptWaveforms[]
     */
    public $scriptWaveforms;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'httpStatusCode'  => 'HttpStatusCode',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'scriptWaveforms' => 'ScriptWaveforms',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scriptWaveforms) {
            $res['ScriptWaveforms'] = [];
            if (null !== $this->scriptWaveforms && \is_array($this->scriptWaveforms)) {
                $n = 0;
                foreach ($this->scriptWaveforms as $item) {
                    $res['ScriptWaveforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryScriptWaveformsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScriptWaveforms'])) {
            if (!empty($map['ScriptWaveforms'])) {
                $model->scriptWaveforms = [];
                $n                      = 0;
                foreach ($map['ScriptWaveforms'] as $item) {
                    $model->scriptWaveforms[$n++] = null !== $item ? scriptWaveforms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
