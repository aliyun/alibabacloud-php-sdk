<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SendDocumentAskQuestionResponseBody;

use AlibabaCloud\Dara\Model;

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
        'answer' => 'answer',
        'document' => 'document',
    ];

    public function validate()
    {
        if (\is_array($this->document)) {
            Model::validateArray($this->document);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }

        if (null !== $this->document) {
            if (\is_array($this->document)) {
                $res['document'] = [];
                $n1 = 0;
                foreach ($this->document as $item1) {
                    $res['document'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }

        if (isset($map['document'])) {
            if (!empty($map['document'])) {
                $model->document = [];
                $n1 = 0;
                foreach ($map['document'] as $item1) {
                    $model->document[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
