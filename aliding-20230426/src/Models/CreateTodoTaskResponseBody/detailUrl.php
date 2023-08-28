<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody;

use AlibabaCloud\Tea\Model;

class detailUrl extends Model
{
    /**
     * @example https://www.dingtalk.com
     *
     * @var string
     */
    public $appUrl;

    /**
     * @example https://www.dingtalk.com
     *
     * @var string
     */
    public $pcUrl;
    protected $_name = [
        'appUrl' => 'appUrl',
        'pcUrl'  => 'pcUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['appUrl'] = $this->appUrl;
        }
        if (null !== $this->pcUrl) {
            $res['pcUrl'] = $this->pcUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailUrl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appUrl'])) {
            $model->appUrl = $map['appUrl'];
        }
        if (isset($map['pcUrl'])) {
            $model->pcUrl = $map['pcUrl'];
        }

        return $model;
    }
}
