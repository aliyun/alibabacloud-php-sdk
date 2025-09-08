<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload\output\item;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'text' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
