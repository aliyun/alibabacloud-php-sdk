<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptWaveformsResponseBody\scriptWaveforms;

class QueryScriptWaveformsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scriptWaveforms[]
     */
    public $scriptWaveforms;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'scriptWaveforms' => 'ScriptWaveforms',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->scriptWaveforms)) {
            Model::validateArray($this->scriptWaveforms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scriptWaveforms)) {
                $res['ScriptWaveforms'] = [];
                $n1 = 0;
                foreach ($this->scriptWaveforms as $item1) {
                    $res['ScriptWaveforms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
                $n1 = 0;
                foreach ($map['ScriptWaveforms'] as $item1) {
                    $model->scriptWaveforms[$n1++] = scriptWaveforms::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
