<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody\data\asrVocab;

class data extends Model
{
    /**
     * @var asrVocab[]
     */
    public $asrVocab;
    protected $_name = [
        'asrVocab' => 'AsrVocab',
    ];

    public function validate()
    {
        if (\is_array($this->asrVocab)) {
            Model::validateArray($this->asrVocab);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrVocab) {
            if (\is_array($this->asrVocab)) {
                $res['AsrVocab'] = [];
                $n1 = 0;
                foreach ($this->asrVocab as $item1) {
                    $res['AsrVocab'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AsrVocab'])) {
            if (!empty($map['AsrVocab'])) {
                $model->asrVocab = [];
                $n1 = 0;
                foreach ($map['AsrVocab'] as $item1) {
                    $model->asrVocab[$n1] = asrVocab::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
