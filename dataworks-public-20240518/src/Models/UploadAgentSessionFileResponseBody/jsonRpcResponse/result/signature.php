<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UploadAgentSessionFileResponseBody\jsonRpcResponse\result;

use AlibabaCloud\Dara\Model;

class signature extends Model
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
     * @var string
     */
    public $url;
    protected $_name = [
        'expiresAt' => 'ExpiresAt',
        'headers' => 'Headers',
        'url' => 'Url',
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
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['Headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                foreach ($map['Headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
