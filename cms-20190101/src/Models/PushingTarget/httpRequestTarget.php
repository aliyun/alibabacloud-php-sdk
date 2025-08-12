<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PushingTarget;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PushingTarget\httpRequestTarget\headers;

class httpRequestTarget extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $encryptSignatureKey;

    /**
     * @var string
     */
    public $encryptString;

    /**
     * @var string
     */
    public $encryptTimestampKey;

    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'contentType' => 'ContentType',
        'encryptSignatureKey' => 'EncryptSignatureKey',
        'encryptString' => 'EncryptString',
        'encryptTimestampKey' => 'EncryptTimestampKey',
        'headers' => 'Headers',
        'method' => 'Method',
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
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->encryptSignatureKey) {
            $res['EncryptSignatureKey'] = $this->encryptSignatureKey;
        }

        if (null !== $this->encryptString) {
            $res['EncryptString'] = $this->encryptString;
        }

        if (null !== $this->encryptTimestampKey) {
            $res['EncryptTimestampKey'] = $this->encryptTimestampKey;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['EncryptSignatureKey'])) {
            $model->encryptSignatureKey = $map['EncryptSignatureKey'];
        }

        if (isset($map['EncryptString'])) {
            $model->encryptString = $map['EncryptString'];
        }

        if (isset($map['EncryptTimestampKey'])) {
            $model->encryptTimestampKey = $map['EncryptTimestampKey'];
        }

        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1] = headers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
