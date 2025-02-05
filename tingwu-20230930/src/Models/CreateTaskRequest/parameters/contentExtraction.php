<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\contentExtraction\extractionContents;

class contentExtraction extends Model
{
    /**
     * @var extractionContents[]
     */
    public $extractionContents;
    /**
     * @var string
     */
    public $sceneIntroduction;
    /**
     * @var mixed[]
     */
    public $speakerMap;
    protected $_name = [
        'extractionContents' => 'ExtractionContents',
        'sceneIntroduction'  => 'SceneIntroduction',
        'speakerMap'         => 'SpeakerMap',
    ];

    public function validate()
    {
        if (\is_array($this->extractionContents)) {
            Model::validateArray($this->extractionContents);
        }
        if (\is_array($this->speakerMap)) {
            Model::validateArray($this->speakerMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extractionContents) {
            if (\is_array($this->extractionContents)) {
                $res['ExtractionContents'] = [];
                $n1                        = 0;
                foreach ($this->extractionContents as $item1) {
                    $res['ExtractionContents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sceneIntroduction) {
            $res['SceneIntroduction'] = $this->sceneIntroduction;
        }

        if (null !== $this->speakerMap) {
            if (\is_array($this->speakerMap)) {
                $res['SpeakerMap'] = [];
                foreach ($this->speakerMap as $key1 => $value1) {
                    $res['SpeakerMap'][$key1] = $value1;
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
        if (isset($map['ExtractionContents'])) {
            if (!empty($map['ExtractionContents'])) {
                $model->extractionContents = [];
                $n1                        = 0;
                foreach ($map['ExtractionContents'] as $item1) {
                    $model->extractionContents[$n1++] = extractionContents::fromMap($item1);
                }
            }
        }

        if (isset($map['SceneIntroduction'])) {
            $model->sceneIntroduction = $map['SceneIntroduction'];
        }

        if (isset($map['SpeakerMap'])) {
            if (!empty($map['SpeakerMap'])) {
                $model->speakerMap = [];
                foreach ($map['SpeakerMap'] as $key1 => $value1) {
                    $model->speakerMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
