<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\contentExtraction\extractionContents;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extractionContents) {
            $res['ExtractionContents'] = [];
            if (null !== $this->extractionContents && \is_array($this->extractionContents)) {
                $n = 0;
                foreach ($this->extractionContents as $item) {
                    $res['ExtractionContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneIntroduction) {
            $res['SceneIntroduction'] = $this->sceneIntroduction;
        }
        if (null !== $this->speakerMap) {
            $res['SpeakerMap'] = $this->speakerMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentExtraction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtractionContents'])) {
            if (!empty($map['ExtractionContents'])) {
                $model->extractionContents = [];
                $n                         = 0;
                foreach ($map['ExtractionContents'] as $item) {
                    $model->extractionContents[$n++] = null !== $item ? extractionContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneIntroduction'])) {
            $model->sceneIntroduction = $map['SceneIntroduction'];
        }
        if (isset($map['SpeakerMap'])) {
            $model->speakerMap = $map['SpeakerMap'];
        }

        return $model;
    }
}
