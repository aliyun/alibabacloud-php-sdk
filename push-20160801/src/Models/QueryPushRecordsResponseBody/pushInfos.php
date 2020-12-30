<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponseBody\pushInfos\pushInfo;
use AlibabaCloud\Tea\Model;

class pushInfos extends Model
{
    /**
     * @var pushInfo[]
     */
    public $pushInfo;
    protected $_name = [
        'pushInfo' => 'PushInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushInfo) {
            $res['PushInfo'] = [];
            if (null !== $this->pushInfo && \is_array($this->pushInfo)) {
                $n = 0;
                foreach ($this->pushInfo as $item) {
                    $res['PushInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushInfo'])) {
            if (!empty($map['PushInfo'])) {
                $model->pushInfo = [];
                $n               = 0;
                foreach ($map['PushInfo'] as $item) {
                    $model->pushInfo[$n++] = null !== $item ? pushInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
