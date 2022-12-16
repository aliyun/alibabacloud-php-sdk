<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Tea\Model;

class robots extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $atAll;

    /**
     * @example https://oapi.dingtalk.com/robot/send?access_token=******************************
     *
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'atAll'  => 'AtAll',
        'webUrl' => 'WebUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atAll) {
            $res['AtAll'] = $this->atAll;
        }
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return robots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AtAll'])) {
            $model->atAll = $map['AtAll'];
        }
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }

        return $model;
    }
}
