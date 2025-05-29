<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponseBody\data\output;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponseBody\data\rt;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponseBody\data\usages;

class data extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var output
     */
    public $output;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rt
     */
    public $rt;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var usages
     */
    public $usages;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'output' => 'output',
        'requestId' => 'requestId',
        'rt' => 'rt',
        'sessionId' => 'sessionId',
        'usages' => 'usages',
    ];

    public function validate()
    {
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->rt) {
            $this->rt->validate();
        }
        if (null !== $this->usages) {
            $this->usages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->rt) {
            $res['rt'] = null !== $this->rt ? $this->rt->toArray($noStream) : $this->rt;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->usages) {
            $res['usages'] = null !== $this->usages ? $this->usages->toArray($noStream) : $this->usages;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['rt'])) {
            $model->rt = rt::fromMap($map['rt']);
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['usages'])) {
            $model->usages = usages::fromMap($map['usages']);
        }

        return $model;
    }
}
