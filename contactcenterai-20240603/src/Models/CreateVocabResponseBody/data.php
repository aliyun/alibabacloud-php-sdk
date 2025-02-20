<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateVocabResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'vocabularyId' => 'vocabularyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vocabularyId) {
            $res['vocabularyId'] = $this->vocabularyId;
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
        if (isset($map['vocabularyId'])) {
            $model->vocabularyId = $map['vocabularyId'];
        }

        return $model;
    }
}
