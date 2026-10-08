<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\parts;

use AlibabaCloud\Dara\Model;

class file extends Model
{
    /**
     * @var string
     */
    public $bytes;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'bytes' => 'bytes',
        'mimeType' => 'mimeType',
        'name' => 'name',
        'uri' => 'uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bytes) {
            $res['bytes'] = $this->bytes;
        }

        if (null !== $this->mimeType) {
            $res['mimeType'] = $this->mimeType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->uri) {
            $res['uri'] = $this->uri;
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
        if (isset($map['bytes'])) {
            $model->bytes = $map['bytes'];
        }

        if (isset($map['mimeType'])) {
            $model->mimeType = $map['mimeType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}
