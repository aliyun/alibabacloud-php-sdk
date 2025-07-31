<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody\choices;
use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody\error;
use AlibabaCloud\Tea\Model;

class LlmStreamChatResponseBody extends Model
{
    /**
     * @var choices[]
     */
    public $choices;

    /**
     * @example 1750990728
     *
     * @var int
     */
    public $created;

    /**
     * @var error
     */
    public $error;

    /**
     * @example chatcmpl-777bce52-93d3-9f8c-89c3-e99884f4f57f
     *
     * @var string
     */
    public $id;

    /**
     * @example deepseek-v3
     *
     * @var string
     */
    public $model;

    /**
     * @example chat.completion.chunk
     *
     * @var string
     */
    public $object;

    /**
     * @example 21d296d6-594e-97de-812f-925ec6e05673
     *
     * @var string
     */
    public $requestId;

    /**
     * @example null
     *
     * @var string
     */
    public $systemFingerprint;

    /**
     * @example null
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'choices' => 'Choices',
        'created' => 'Created',
        'error' => 'Error',
        'id' => 'Id',
        'model' => 'Model',
        'object' => 'Object',
        'requestId' => 'RequestId',
        'systemFingerprint' => 'SystemFingerprint',
        'usage' => 'Usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->choices) {
            $res['Choices'] = [];
            if (null !== $this->choices && \is_array($this->choices)) {
                $n = 0;
                foreach ($this->choices as $item) {
                    $res['Choices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemFingerprint) {
            $res['SystemFingerprint'] = $this->systemFingerprint;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LlmStreamChatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Choices'])) {
            if (!empty($map['Choices'])) {
                $model->choices = [];
                $n = 0;
                foreach ($map['Choices'] as $item) {
                    $model->choices[$n++] = null !== $item ? choices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Error'])) {
            $model->error = error::fromMap($map['Error']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemFingerprint'])) {
            $model->systemFingerprint = $map['SystemFingerprint'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
