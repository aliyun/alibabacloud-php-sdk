<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageRequest\configuration;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageRequest\message;

class SendNapalStreamMessageRequest extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var message
     */
    public $message;

    /**
     * @var string[]
     */
    public $metadata;
    protected $_name = [
        'configuration' => 'Configuration',
        'message' => 'Message',
        'metadata' => 'Metadata',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        if (null !== $this->message) {
            $this->message->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->message) {
            $res['Message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
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
        if (isset($map['Configuration'])) {
            $model->configuration = configuration::fromMap($map['Configuration']);
        }

        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
