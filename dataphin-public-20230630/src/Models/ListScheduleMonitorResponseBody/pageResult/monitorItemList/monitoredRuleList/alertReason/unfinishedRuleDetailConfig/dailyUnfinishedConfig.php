<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertReason\unfinishedRuleDetailConfig;

use AlibabaCloud\Dara\Model;

class dailyUnfinishedConfig extends Model
{
    /**
     * @var string
     */
    public $fixedUnfinishedTime;
    protected $_name = [
        'fixedUnfinishedTime' => 'FixedUnfinishedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fixedUnfinishedTime) {
            $res['FixedUnfinishedTime'] = $this->fixedUnfinishedTime;
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
        if (isset($map['FixedUnfinishedTime'])) {
            $model->fixedUnfinishedTime = $map['FixedUnfinishedTime'];
        }

        return $model;
    }
}
