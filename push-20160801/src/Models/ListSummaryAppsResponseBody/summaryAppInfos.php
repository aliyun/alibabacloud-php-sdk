<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody\summaryAppInfos\summaryAppInfo;

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
        if (\is_array($this->summaryAppInfo)) {
            Model::validateArray($this->summaryAppInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summaryAppInfo) {
            if (\is_array($this->summaryAppInfo)) {
                $res['SummaryAppInfo'] = [];
                $n1 = 0;
                foreach ($this->summaryAppInfo as $item1) {
                    $res['SummaryAppInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SummaryAppInfo'])) {
            if (!empty($map['SummaryAppInfo'])) {
                $model->summaryAppInfo = [];
                $n1 = 0;
                foreach ($map['SummaryAppInfo'] as $item1) {
                    $model->summaryAppInfo[$n1] = summaryAppInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
