<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class MedicalAnswerMessage extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var MedicalAnswerMetaData
     */
    public $metaData;
    protected $_name = [
        'content' => 'content',
        'metaData' => 'metaData',
    ];

    public function validate()
    {
        if (null !== $this->metaData) {
            $this->metaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->metaData) {
            $res['metaData'] = null !== $this->metaData ? $this->metaData->toArray($noStream) : $this->metaData;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['metaData'])) {
            $model->metaData = MedicalAnswerMetaData::fromMap($map['metaData']);
        }

        return $model;
    }
}
