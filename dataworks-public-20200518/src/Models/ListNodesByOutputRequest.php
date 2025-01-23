<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListNodesByOutputRequest extends Model
{
    /**
     * @var string
     */
    public $outputs;
    /**
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'outputs'    => 'Outputs',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
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
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
