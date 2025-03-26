<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponseBody\data\gradeVolumes;

class data extends Model
{
    /**
     * @var gradeVolumes[]
     */
    public $gradeVolumes;

    /**
     * @var string
     */
    public $textbookVersion;
    protected $_name = [
        'gradeVolumes' => 'gradeVolumes',
        'textbookVersion' => 'textbookVersion',
    ];

    public function validate()
    {
        if (\is_array($this->gradeVolumes)) {
            Model::validateArray($this->gradeVolumes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gradeVolumes) {
            if (\is_array($this->gradeVolumes)) {
                $res['gradeVolumes'] = [];
                $n1 = 0;
                foreach ($this->gradeVolumes as $item1) {
                    $res['gradeVolumes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->textbookVersion) {
            $res['textbookVersion'] = $this->textbookVersion;
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
        if (isset($map['gradeVolumes'])) {
            if (!empty($map['gradeVolumes'])) {
                $model->gradeVolumes = [];
                $n1 = 0;
                foreach ($map['gradeVolumes'] as $item1) {
                    $model->gradeVolumes[$n1++] = gradeVolumes::fromMap($item1);
                }
            }
        }

        if (isset($map['textbookVersion'])) {
            $model->textbookVersion = $map['textbookVersion'];
        }

        return $model;
    }
}
