<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionRequest\params;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\PromptAgentSessionRequest\params\prompt\meta;

class prompt extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'description' => 'Description',
        'meta' => 'Meta',
        'mimeType' => 'MimeType',
        'name' => 'Name',
        'size' => 'Size',
        'text' => 'Text',
        'title' => 'Title',
        'type' => 'Type',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->mimeType) {
            $res['MimeType'] = $this->mimeType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }

        if (isset($map['MimeType'])) {
            $model->mimeType = $map['MimeType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
