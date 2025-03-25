<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAAdvanceRequest;

use AlibabaCloud\Dara\Model;

class answerImageDataList extends Model
{
    /**
     * @var string
     */
    public $answerImageData;
    protected $_name = [
        'answerImageData' => 'AnswerImageData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerImageData) {
            $res['AnswerImageData'] = $this->answerImageData;
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
        if (isset($map['AnswerImageData'])) {
            $model->answerImageData = $map['AnswerImageData'];
        }

        return $model;
    }
}
