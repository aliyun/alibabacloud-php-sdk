<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models\LivenessDetectResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $passed;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $frameUrl;
    protected $_name = [
        'passed'   => 'Passed',
        'score'    => 'Score',
        'frameUrl' => 'FrameUrl',
    ];

    public function validate()
    {
        Model::validateRequired('passed', $this->passed, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('frameUrl', $this->frameUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->frameUrl) {
            $res['FrameUrl'] = $this->frameUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['FrameUrl'])) {
            $model->frameUrl = $map['FrameUrl'];
        }

        return $model;
    }
}
