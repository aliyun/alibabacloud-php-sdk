<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTaskItemReportResponseBody\trafficControlTaskItemReports;

class QueryTrafficControlTaskItemReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficControlTaskItemReports[]
     */
    public $trafficControlTaskItemReports;
    protected $_name = [
        'requestId' => 'RequestId',
        'trafficControlTaskItemReports' => 'TrafficControlTaskItemReports',
    ];

    public function validate()
    {
        if (\is_array($this->trafficControlTaskItemReports)) {
            Model::validateArray($this->trafficControlTaskItemReports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficControlTaskItemReports) {
            if (\is_array($this->trafficControlTaskItemReports)) {
                $res['TrafficControlTaskItemReports'] = [];
                $n1 = 0;
                foreach ($this->trafficControlTaskItemReports as $item1) {
                    $res['TrafficControlTaskItemReports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrafficControlTaskItemReports'])) {
            if (!empty($map['TrafficControlTaskItemReports'])) {
                $model->trafficControlTaskItemReports = [];
                $n1 = 0;
                foreach ($map['TrafficControlTaskItemReports'] as $item1) {
                    $model->trafficControlTaskItemReports[$n1] = trafficControlTaskItemReports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
