<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Tea\Model;

class UpdateAnalysisRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example 1549d636-b102-4fee-8a99-fcc552aa9aa9
     *
     * @var string
     */
    public $contentCode;

    /**
     * @description This parameter is required.
     *
     * @example Ex_pop_1731848070815_funI
     *
     * @var string
     */
    public $exerciseCode;
    protected $_name = [
        'content'      => 'Content',
        'contentCode'  => 'ContentCode',
        'exerciseCode' => 'ExerciseCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentCode) {
            $res['ContentCode'] = $this->contentCode;
        }
        if (null !== $this->exerciseCode) {
            $res['ExerciseCode'] = $this->exerciseCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentCode'])) {
            $model->contentCode = $map['ContentCode'];
        }
        if (isset($map['ExerciseCode'])) {
            $model->exerciseCode = $map['ExerciseCode'];
        }

        return $model;
    }
}
