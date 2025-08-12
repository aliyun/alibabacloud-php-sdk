<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class MergeWebhook extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var mixed[]
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'contentType' => 'contentType',
        'extend' => 'extend',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'headers' => 'headers',
        'identifier' => 'identifier',
        'lang' => 'lang',
        'method' => 'method',
        'name' => 'name',
        'source' => 'source',
        'type' => 'type',
        'webhook' => 'webhook',
    ];

    public function validate()
    {
        if (\is_array($this->gmtModified)) {
            Model::validateArray($this->gmtModified);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->extend) {
            $res['extend'] = $this->extend;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            if (\is_array($this->gmtModified)) {
                $res['gmtModified'] = [];
                foreach ($this->gmtModified as $key1 => $value1) {
                    $res['gmtModified'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['extend'])) {
            $model->extend = $map['extend'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            if (!empty($map['gmtModified'])) {
                $model->gmtModified = [];
                foreach ($map['gmtModified'] as $key1 => $value1) {
                    $model->gmtModified[$key1] = $value1;
                }
            }
        }

        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['webhook'])) {
            $model->webhook = $map['webhook'];
        }

        return $model;
    }
}
