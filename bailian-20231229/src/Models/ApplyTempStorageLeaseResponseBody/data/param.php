<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyTempStorageLeaseResponseBody\data;

use AlibabaCloud\Dara\Model;

class param extends Model
{
    /**
     * @var mixed
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
        'headers' => 'Headers',
        'method' => 'Method',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
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
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
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
