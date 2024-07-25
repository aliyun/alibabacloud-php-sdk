<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaAiAnalysisJobRequest extends Model
{
    /**
     * @example {"nlpParams":{"sourceLanguage":"cn","diarizationEnabled":true,"speakerCount":0,"summarizationEnabled":false,"translationEnabled":false}}
     *
     * @var string
     */
    public $analysisParams;

    /**
     * @example {"MediaType":"video","Media":"https://xxx.com/your_movie.mp4"}
     *
     * @var string
     */
    public $input;
    protected $_name = [
        'analysisParams' => 'AnalysisParams',
        'input'          => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisParams) {
            $res['AnalysisParams'] = $this->analysisParams;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMediaAiAnalysisJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisParams'])) {
            $model->analysisParams = $map['AnalysisParams'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        return $model;
    }
}
