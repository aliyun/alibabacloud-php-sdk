<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskResponseBody;

use AlibabaCloud\Tea\Model;

class detailUrl extends Model
{
    /**
     * @example dingtalk://dingtalkclient/action/open_mini_app?miniAppId={0}&ddMode=push&page=pages%2ftask-detail%2ftask-detail%3ftaskId%3d{1}
     *
     * @var string
     */
    public $appUrl;

    /**
     * @example https://todo.dingtalk.com/ding-portal/detail/task/{0}
     *
     * @var string
     */
    public $pcUrl;
    protected $_name = [
        'appUrl' => 'AppUrl',
        'pcUrl' => 'PcUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['AppUrl'] = $this->appUrl;
        }
        if (null !== $this->pcUrl) {
            $res['PcUrl'] = $this->pcUrl;
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
        if (isset($map['AppUrl'])) {
            $model->appUrl = $map['AppUrl'];
        }
        if (isset($map['PcUrl'])) {
            $model->pcUrl = $map['PcUrl'];
        }

        return $model;
    }
}
