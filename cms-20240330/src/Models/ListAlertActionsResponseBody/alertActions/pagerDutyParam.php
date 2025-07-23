<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponseBody\alertActions;

use AlibabaCloud\Tea\Model;

class pagerDutyParam extends Model
{
    /**
     * @example fsfer4543t5t65g4t4
     *
     * @var string
     */
    public $key;

    /**
     * @example https://events.pagerduty.com/v2/enqueue
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'key' => 'key',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagerDutyParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
