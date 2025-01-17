<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitMediaAiAnalysisJobRequest extends Model
{
    /**
     * @var string
     */
    public $analysisParams;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
