<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest;

use AlibabaCloud\Tea\Model;

class answerImageDataList extends Model
{
    /**
     * @var int[]
     */
    public $answerImageData;
    protected $_name = [
        'answerImageData' => 'AnswerImageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerImageData) {
            $res['AnswerImageData'] = $this->answerImageData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return answerImageDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerImageData'])) {
            $model->answerImageData = $map['AnswerImageData'];
        }

        return $model;
    }
}
