<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody\summaryAppInfos\summaryAppInfo;
use AlibabaCloud\Tea\Model;

class summaryAppInfos extends Model
{
    /**
     * @var summaryAppInfo[]
     */
    public $summaryAppInfo;
    protected $_name = [
        'summaryAppInfo' => 'SummaryAppInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryAppInfo) {
            $res['SummaryAppInfo'] = [];
            if (null !== $this->summaryAppInfo && \is_array($this->summaryAppInfo)) {
                $n = 0;
                foreach ($this->summaryAppInfo as $item) {
                    $res['SummaryAppInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryAppInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SummaryAppInfo'])) {
            if (!empty($map['SummaryAppInfo'])) {
                $model->summaryAppInfo = [];
                $n                     = 0;
                foreach ($map['SummaryAppInfo'] as $item) {
                    $model->summaryAppInfo[$n++] = null !== $item ? summaryAppInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
