<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponseBody\data\metadata\asrSentences;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponseBody\data\metadata\keyValues;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponseBody\data\metadata\videoShots;

class metadata extends Model
{
    /**
     * @var asrSentences[]
     */
    public $asrSentences;

    /**
     * @var keyValues[]
     */
    public $keyValues;

    /**
     * @var string
     */
    public $text;

    /**
     * @var videoShots[]
     */
    public $videoShots;
    protected $_name = [
        'asrSentences' => 'AsrSentences',
        'keyValues' => 'KeyValues',
        'text' => 'Text',
        'videoShots' => 'VideoShots',
    ];

    public function validate()
    {
        if (\is_array($this->asrSentences)) {
            Model::validateArray($this->asrSentences);
        }
        if (\is_array($this->keyValues)) {
            Model::validateArray($this->keyValues);
        }
        if (\is_array($this->videoShots)) {
            Model::validateArray($this->videoShots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrSentences) {
            if (\is_array($this->asrSentences)) {
                $res['AsrSentences'] = [];
                $n1 = 0;
                foreach ($this->asrSentences as $item1) {
                    $res['AsrSentences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyValues) {
            if (\is_array($this->keyValues)) {
                $res['KeyValues'] = [];
                $n1 = 0;
                foreach ($this->keyValues as $item1) {
                    $res['KeyValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->videoShots) {
            if (\is_array($this->videoShots)) {
                $res['VideoShots'] = [];
                $n1 = 0;
                foreach ($this->videoShots as $item1) {
                    $res['VideoShots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AsrSentences'])) {
            if (!empty($map['AsrSentences'])) {
                $model->asrSentences = [];
                $n1 = 0;
                foreach ($map['AsrSentences'] as $item1) {
                    $model->asrSentences[$n1] = asrSentences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['KeyValues'])) {
            if (!empty($map['KeyValues'])) {
                $model->keyValues = [];
                $n1 = 0;
                foreach ($map['KeyValues'] as $item1) {
                    $model->keyValues[$n1] = keyValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['VideoShots'])) {
            if (!empty($map['VideoShots'])) {
                $model->videoShots = [];
                $n1 = 0;
                foreach ($map['VideoShots'] as $item1) {
                    $model->videoShots[$n1] = videoShots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
