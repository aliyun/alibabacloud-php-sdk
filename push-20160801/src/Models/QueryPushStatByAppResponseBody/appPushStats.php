<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponseBody\appPushStats\appPushStat;
use AlibabaCloud\Tea\Model;

class appPushStats extends Model
{
    /**
     * @var appPushStat[]
     */
    public $appPushStat;
    protected $_name = [
        'appPushStat' => 'AppPushStat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appPushStat) {
            $res['AppPushStat'] = [];
            if (null !== $this->appPushStat && \is_array($this->appPushStat)) {
                $n = 0;
                foreach ($this->appPushStat as $item) {
                    $res['AppPushStat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appPushStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppPushStat'])) {
            if (!empty($map['AppPushStat'])) {
                $model->appPushStat = [];
                $n                  = 0;
                foreach ($map['AppPushStat'] as $item) {
                    $model->appPushStat[$n++] = null !== $item ? appPushStat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
