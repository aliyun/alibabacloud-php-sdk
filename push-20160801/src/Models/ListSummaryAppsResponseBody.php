<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponseBody\summaryAppInfos;
use AlibabaCloud\Tea\Model;

class ListSummaryAppsResponseBody extends Model
{
    /**
     * @example 9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC
     *
     * @var string
     */
    public $requestId;

    /**
     * @var summaryAppInfos
     */
    public $summaryAppInfos;
    protected $_name = [
        'requestId'       => 'RequestId',
        'summaryAppInfos' => 'SummaryAppInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->summaryAppInfos) {
            $res['SummaryAppInfos'] = null !== $this->summaryAppInfos ? $this->summaryAppInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSummaryAppsResponseBody
     */
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
