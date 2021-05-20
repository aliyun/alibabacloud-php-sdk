<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Tea\Model;

class robots extends Model
{
    /**
     * @var string
     */
    public $webUrl;

    /**
     * @var bool
     */
    public $atAll;
    protected $_name = [
        'webUrl' => 'WebUrl',
        'atAll'  => 'AtAll',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webUrl) {
            $res['WebUrl'] = $this->webUrl;
        }
        if (null !== $this->atAll) {
            $res['AtAll'] = $this->atAll;
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
        if (isset($map['WebUrl'])) {
            $model->webUrl = $map['WebUrl'];
        }
        if (isset($map['AtAll'])) {
            $model->atAll = $map['AtAll'];
        }

        return $model;
    }
}
