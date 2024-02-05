<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\instanceLoginInfoList;

use AlibabaCloud\Tea\Model;

class instanceLoginView extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $defaultViewUrl;
    protected $_name = [
        'defaultViewUrl' => 'DefaultViewUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultViewUrl) {
            $res['DefaultViewUrl'] = $this->defaultViewUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceLoginView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultViewUrl'])) {
            $model->defaultViewUrl = $map['DefaultViewUrl'];
        }

        return $model;
    }
}
