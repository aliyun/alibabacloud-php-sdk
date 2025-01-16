<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponseBody;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponseBody\data\gradeVolumes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var gradeVolumes[]
     */
    public $gradeVolumes;

    /**
     * @description This parameter is required.
     *
     * @example 人教版
     *
     * @var string
     */
    public $textbookVersion;
    protected $_name = [
        'gradeVolumes'    => 'gradeVolumes',
        'textbookVersion' => 'textbookVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gradeVolumes) {
            $res['gradeVolumes'] = [];
            if (null !== $this->gradeVolumes && \is_array($this->gradeVolumes)) {
                $n = 0;
                foreach ($this->gradeVolumes as $item) {
                    $res['gradeVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textbookVersion) {
            $res['textbookVersion'] = $this->textbookVersion;
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
        if (isset($map['gradeVolumes'])) {
            if (!empty($map['gradeVolumes'])) {
                $model->gradeVolumes = [];
                $n                   = 0;
                foreach ($map['gradeVolumes'] as $item) {
                    $model->gradeVolumes[$n++] = null !== $item ? gradeVolumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['textbookVersion'])) {
            $model->textbookVersion = $map['textbookVersion'];
        }

        return $model;
    }
}
