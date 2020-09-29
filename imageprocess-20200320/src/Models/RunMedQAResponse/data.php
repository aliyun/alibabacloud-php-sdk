<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string[]
     */
    public $similarQuestion;
    protected $_name = [
        'answer'          => 'Answer',
        'similarQuestion' => 'SimilarQuestion',
    ];

    public function validate()
    {
        Model::validateRequired('answer', $this->answer, true);
        Model::validateRequired('similarQuestion', $this->similarQuestion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }
        if (null !== $this->similarQuestion) {
            $res['SimilarQuestion'] = $this->similarQuestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }
        if (isset($map['SimilarQuestion'])) {
            if (!empty($map['SimilarQuestion'])) {
                $model->similarQuestion = $map['SimilarQuestion'];
            }
        }

        return $model;
    }
}
