<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeObjectRequest\content;

use AlibabaCloud\Dara\Model;

class document extends Model
{
    /**
     * @var string
     */
    public $contentFormat;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'contentFormat' => 'ContentFormat',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentFormat) {
            $res['ContentFormat'] = $this->contentFormat;
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
        if (isset($map['ContentFormat'])) {
            $model->contentFormat = $map['ContentFormat'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
