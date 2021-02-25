<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models\LivenessDetectResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $frameUrl;

    /**
     * @var string
     */
    public $passed;
    protected $_name = [
        'score'    => 'Score',
        'frameUrl' => 'FrameUrl',
        'passed'   => 'Passed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->frameUrl) {
            $res['FrameUrl'] = $this->frameUrl;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['FrameUrl'])) {
            $model->frameUrl = $map['FrameUrl'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        return $model;
    }
}
