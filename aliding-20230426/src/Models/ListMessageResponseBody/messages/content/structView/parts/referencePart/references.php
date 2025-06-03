<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageResponseBody\messages\content\structView\parts\referencePart;

use AlibabaCloud\Dara\Model;

class references extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIcon;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'index' => 'index',
        'name' => 'name',
        'sourceCode' => 'sourceCode',
        'sourceIcon' => 'sourceIcon',
        'summary' => 'summary',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sourceCode) {
            $res['sourceCode'] = $this->sourceCode;
        }

        if (null !== $this->sourceIcon) {
            $res['sourceIcon'] = $this->sourceIcon;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sourceCode'])) {
            $model->sourceCode = $map['sourceCode'];
        }

        if (isset($map['sourceIcon'])) {
            $model->sourceIcon = $map['sourceIcon'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
