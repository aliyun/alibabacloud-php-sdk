<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody\summaryAppInfos;

class ListSummaryAppsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var summaryAppInfos
     */
    public $summaryAppInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'summaryAppInfos' => 'SummaryAppInfos',
    ];

    public function validate()
    {
        if (null !== $this->summaryAppInfos) {
            $this->summaryAppInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->summaryAppInfos) {
            $res['SummaryAppInfos'] = null !== $this->summaryAppInfos ? $this->summaryAppInfos->toArray($noStream) : $this->summaryAppInfos;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SummaryAppInfos'])) {
            $model->summaryAppInfos = summaryAppInfos::fromMap($map['SummaryAppInfos']);
        }

        return $model;
    }
}
