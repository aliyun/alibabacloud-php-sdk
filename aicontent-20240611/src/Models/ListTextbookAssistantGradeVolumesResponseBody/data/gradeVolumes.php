<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantGradeVolumesResponseBody\data;

use AlibabaCloud\Tea\Model;

class gradeVolumes extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $grade;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'grade'  => 'grade',
        'volume' => 'volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }
        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gradeVolumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }
        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
