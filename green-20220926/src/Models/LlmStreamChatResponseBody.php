<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody\choices;
use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody\error;

class LlmStreamChatResponseBody extends Model
{
    /**
     * @var choices[]
     */
    public $choices;

    /**
     * @var int
     */
    public $created;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $systemFingerprint;

    /**
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

    public function validate()
    {
        if (\is_array($this->choices)) {
            Model::validateArray($this->choices);
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->choices) {
            if (\is_array($this->choices)) {
                $res['Choices'] = [];
                $n1 = 0;
                foreach ($this->choices as $item1) {
                    $res['Choices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Choices'])) {
            if (!empty($map['Choices'])) {
                $model->choices = [];
                $n1 = 0;
                foreach ($map['Choices'] as $item1) {
                    $model->choices[$n1] = choices::fromMap($item1);
                    ++$n1;
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
