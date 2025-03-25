<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAAdvanceRequest;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class answerImageURLList extends Model
{
    /**
     * @var Stream
     */
    public $answerImageURLObject;
    protected $_name = [
        'answerImageURLObject' => 'AnswerImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerImageURLObject) {
            $res['AnswerImageURL'] = $this->answerImageURLObject;
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
            $model->answerImageURLObject = $map['AnswerImageURL'];
        }

        return $model;
    }
}
