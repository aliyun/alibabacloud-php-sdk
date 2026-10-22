<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageUploadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var string
     */
    public $sourceUri;

    /**
     * @var string
     */
    public $uploadMethod;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'expiresAt' => 'expiresAt',
        'headers' => 'headers',
        'maxSize' => 'maxSize',
        'sourceUri' => 'sourceUri',
        'uploadMethod' => 'uploadMethod',
        'uploadUrl' => 'uploadUrl',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }

        if (null !== $this->sourceUri) {
            $res['sourceUri'] = $this->sourceUri;
        }

        if (null !== $this->uploadMethod) {
            $res['uploadMethod'] = $this->uploadMethod;
        }

        if (null !== $this->uploadUrl) {
            $res['uploadUrl'] = $this->uploadUrl;
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
        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                foreach ($map['headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }

        if (isset($map['sourceUri'])) {
            $model->sourceUri = $map['sourceUri'];
        }

        if (isset($map['uploadMethod'])) {
            $model->uploadMethod = $map['uploadMethod'];
        }

        if (isset($map['uploadUrl'])) {
            $model->uploadUrl = $map['uploadUrl'];
        }

        return $model;
    }
}
