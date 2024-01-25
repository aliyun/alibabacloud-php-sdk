<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetScenarioStatisticsListRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $scenarioIds;
    protected $_name = [
        'endTime'     => 'EndTime',
        'operaUid'    => 'OperaUid',
        'scenarioIds' => 'ScenarioIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->scenarioIds) {
            $res['ScenarioIds'] = $this->scenarioIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScenarioStatisticsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ScenarioIds'])) {
            $model->scenarioIds = $map['ScenarioIds'];
        }

        return $model;
    }
}
