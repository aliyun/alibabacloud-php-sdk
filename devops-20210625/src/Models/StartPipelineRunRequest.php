<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class StartPipelineRunRequest extends Model
{
    /**
     * @example {     "branchModeBranchs":[         "branch1",         "branch2"     ],     "envs":{         "k1":"v1",         "k2":"v2",         "k3":"v3"     },     "runningBranchs":{         "https://codeup.aliyun.com/60c1abb32c5969c370c5fcd0/Codeup-Demo.git":"master1"     },     "runningTags":{         "https://codeup.aliyun.com/60c1abb32c5969c370c5fcd0/Codeup-Demo.git":"1.0"     } }
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'params' => 'params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPipelineRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        return $model;
    }
}
