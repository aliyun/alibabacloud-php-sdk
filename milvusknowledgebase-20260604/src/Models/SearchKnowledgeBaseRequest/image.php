<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $base64;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'base64' => 'base64',
        'objectKey' => 'objectKey',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->base64) {
            $res['base64'] = $this->base64;
        }

        if (null !== $this->objectKey) {
            $res['objectKey'] = $this->objectKey;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['base64'])) {
            $model->base64 = $map['base64'];
        }

        if (isset($map['objectKey'])) {
            $model->objectKey = $map['objectKey'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
