<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest;

use AlibabaCloud\Tea\Model;

class answerImageURLList extends Model
{
    /**
     * @example https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/imageprocess/roseola.jpeg
     *
     * @var string
     */
    public $answerImageURL;
    protected $_name = [
        'answerImageURL' => 'AnswerImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerImageURL) {
            $res['AnswerImageURL'] = $this->answerImageURL;
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
            $model->answerImageURL = $map['AnswerImageURL'];
        }

        return $model;
    }
}
