<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListNodesByOutputRequest extends Model
{
    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $outputs;
    protected $_name = [
        'projectEnv' => 'ProjectEnv',
        'outputs'    => 'Outputs',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('outputs', $this->outputs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesByOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        return $model;
    }
}
