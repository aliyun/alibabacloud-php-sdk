<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SendDocumentAskQuestionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string[]
     */
    public $document;
    protected $_name = [
        'answer'   => 'answer',
        'document' => 'document',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }
        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }
        if (isset($map['document'])) {
            if (!empty($map['document'])) {
                $model->document = $map['document'];
            }
        }

        return $model;
    }
}
