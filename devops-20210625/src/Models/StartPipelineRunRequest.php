<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class StartPipelineRunRequest extends Model
{
    /**
     * @var string
     */
    public $params;
    protected $_name = [
        'params' => 'params',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
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
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        return $model;
    }
}
