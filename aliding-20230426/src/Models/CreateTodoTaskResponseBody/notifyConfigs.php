<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody;

use AlibabaCloud\Tea\Model;

class notifyConfigs extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $dingNotify;
    protected $_name = [
        'dingNotify' => 'dingNotify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingNotify) {
            $res['dingNotify'] = $this->dingNotify;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingNotify'])) {
            $model->dingNotify = $map['dingNotify'];
        }

        return $model;
    }
}
