<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest;

use AlibabaCloud\Dara\Model;

class answerImageURLList extends Model
{
    /**
     * @var string
     */
    public $answerImageURL;
    protected $_name = [
        'answerImageURL' => 'AnswerImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerImageURL) {
            $res['AnswerImageURL'] = $this->answerImageURL;
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
        if (isset($map['AnswerImageURL'])) {
            $model->answerImageURL = $map['AnswerImageURL'];
        }

        return $model;
    }
}
