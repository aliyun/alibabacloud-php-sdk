<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskRequest;

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
        'dingNotify' => 'DingNotify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingNotify) {
            $res['DingNotify'] = $this->dingNotify;
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
        if (isset($map['DingNotify'])) {
            $model->dingNotify = $map['DingNotify'];
        }

        return $model;
    }
}
