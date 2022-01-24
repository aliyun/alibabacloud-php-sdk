<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponseBody;

use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponseBody\result\paragraphs;
use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponseBody\result\sentences;
use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponseBody\result\words;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var paragraphs[]
     */
    public $paragraphs;

    /**
     * @var sentences[]
     */
    public $sentences;

    /**
     * @var words[]
     */
    public $words;
    protected $_name = [
        'paragraphs' => 'Paragraphs',
        'sentences'  => 'Sentences',
        'words'      => 'Words',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paragraphs) {
            $res['Paragraphs'] = [];
            if (null !== $this->paragraphs && \is_array($this->paragraphs)) {
                $n = 0;
                foreach ($this->paragraphs as $item) {
                    $res['Paragraphs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sentences) {
            $res['Sentences'] = [];
            if (null !== $this->sentences && \is_array($this->sentences)) {
                $n = 0;
                foreach ($this->sentences as $item) {
                    $res['Sentences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->words) {
            $res['Words'] = [];
            if (null !== $this->words && \is_array($this->words)) {
                $n = 0;
                foreach ($this->words as $item) {
                    $res['Words'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paragraphs'])) {
            if (!empty($map['Paragraphs'])) {
                $model->paragraphs = [];
                $n                 = 0;
                foreach ($map['Paragraphs'] as $item) {
                    $model->paragraphs[$n++] = null !== $item ? paragraphs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sentences'])) {
            if (!empty($map['Sentences'])) {
                $model->sentences = [];
                $n                = 0;
                foreach ($map['Sentences'] as $item) {
                    $model->sentences[$n++] = null !== $item ? sentences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Words'])) {
            if (!empty($map['Words'])) {
                $model->words = [];
                $n            = 0;
                foreach ($map['Words'] as $item) {
                    $model->words[$n++] = null !== $item ? words::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
