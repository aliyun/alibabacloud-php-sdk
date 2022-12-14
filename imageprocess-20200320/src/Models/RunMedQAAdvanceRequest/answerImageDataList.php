<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAAdvanceRequest;

use AlibabaCloud\Tea\Model;

class answerImageDataList extends Model
{
    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9Wb****
     *
     * @var string
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
