<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->presetWorker) {
            $res['presetWorker'] = $this->presetWorker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskWorker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['presetWorker'])) {
            $model->presetWorker = $map['presetWorker'];
        }

        return $model;
    }
}
