<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListAsrVocabResponseBody\data\asrVocab;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrVocab) {
            $res['AsrVocab'] = [];
            if (null !== $this->asrVocab && \is_array($this->asrVocab)) {
                $n = 0;
                foreach ($this->asrVocab as $item) {
                    $res['AsrVocab'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AsrVocab'])) {
            if (!empty($map['AsrVocab'])) {
                $model->asrVocab = [];
                $n               = 0;
                foreach ($map['AsrVocab'] as $item) {
                    $model->asrVocab[$n++] = null !== $item ? asrVocab::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
