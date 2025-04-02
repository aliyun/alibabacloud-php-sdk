<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeRequest;

use AlibabaCloud\Dara\Model;

class hyperlinks extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'type' => 'Type',
        'link' => 'Link',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
