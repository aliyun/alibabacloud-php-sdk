<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PushingTarget;

use AlibabaCloud\SDK\Cms\V20190101\Models\PushingTarget\httpRequestTarget\headers;
use AlibabaCloud\Tea\Model;

class httpRequestTarget extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $encryptString;

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
        'contentType'   => 'ContentType',
        'encryptString' => 'EncryptString',
        'headers'       => 'Headers',
        'method'        => 'Method',
        'url'           => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->encryptString) {
            $res['EncryptString'] = $this->encryptString;
        }
        if (null !== $this->headers) {
            $res['Headers'] = [];
            if (null !== $this->headers && \is_array($this->headers)) {
                $n = 0;
                foreach ($this->headers as $item) {
                    $res['Headers'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return httpRequestTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['EncryptString'])) {
            $model->encryptString = $map['EncryptString'];
        }
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n              = 0;
                foreach ($map['Headers'] as $item) {
                    $model->headers[$n++] = null !== $item ? headers::fromMap($item) : $item;
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
