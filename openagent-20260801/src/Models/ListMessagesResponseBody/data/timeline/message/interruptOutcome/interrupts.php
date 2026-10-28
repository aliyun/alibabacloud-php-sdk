<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\interruptOutcome;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\interruptOutcome\interrupts\data;

class interrupts extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var mixed[]
     */
    public $responseSchema;

    /**
     * @var string
     */
    public $toolCallId;
    protected $_name = [
        'data' => 'data',
        'expiresAt' => 'expiresAt',
        'id' => 'id',
        'message' => 'message',
        'metadata' => 'metadata',
        'reason' => 'reason',
        'responseSchema' => 'responseSchema',
        'toolCallId' => 'toolCallId',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->responseSchema)) {
            Model::validateArray($this->responseSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->responseSchema) {
            if (\is_array($this->responseSchema)) {
                $res['responseSchema'] = [];
                foreach ($this->responseSchema as $key1 => $value1) {
                    $res['responseSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->toolCallId) {
            $res['toolCallId'] = $this->toolCallId;
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
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['responseSchema'])) {
            if (!empty($map['responseSchema'])) {
                $model->responseSchema = [];
                foreach ($map['responseSchema'] as $key1 => $value1) {
                    $model->responseSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['toolCallId'])) {
            $model->toolCallId = $map['toolCallId'];
        }

        return $model;
    }
}
