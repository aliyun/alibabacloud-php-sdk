<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class answerImageURLList extends Model
{
    /**
     * @example https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/imageprocess/roseola.jpeg
     *
     * @var Stream
     */
    public $answerImageURLObject;
    protected $_name = [
        'answerImageURLObject' => 'AnswerImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerImageURLObject) {
            $res['AnswerImageURL'] = $this->answerImageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return answerImageURLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerImageURL'])) {
            $model->answerImageURLObject = $map['AnswerImageURL'];
        }

        return $model;
    }
}
