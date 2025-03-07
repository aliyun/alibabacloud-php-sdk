<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaAiAnalysisJobRequest extends Model
{
    /**
     * @description The analysis parameters.
     *
     * @example {"nlpParams":{"sourceLanguage":"cn","diarizationEnabled":true,"speakerCount":0,"summarizationEnabled":false,"translationEnabled":false}}
     *
     * @var string
     */
    public $analysisParams;

    /**
     * @description The media asset that you want to analyze. You can specify an Object Storage Service (OSS) URL, a media asset ID, or an external URL.
     *
     * @example {"MediaType":"video","Media":"https://xxx.com/your_movie.mp4"}
     *
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'analysisParams' => 'AnalysisParams',
        'input'          => 'Input',
        'userData'       => 'UserData',
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
