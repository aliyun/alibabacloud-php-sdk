<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class TaskWorker extends Model
{
    /**
     * @var string
     */
    public $presetWorker;
    protected $_name = [
        'presetWorker' => 'presetWorker',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->presetWorker) {
            $res['presetWorker'] = $this->presetWorker;
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
        if (isset($map['presetWorker'])) {
            $model->presetWorker = $map['presetWorker'];
        }

        return $model;
    }
}
