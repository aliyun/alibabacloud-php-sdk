<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data;

use AlibabaCloud\Dara\Model;

class overall extends Model
{
    /**
     * @var int
     */
    public $maxLoggedInAgents;
    /**
     * @var int
     */
    public $statsTime;
    protected $_name = [
        'maxLoggedInAgents' => 'MaxLoggedInAgents',
        'statsTime'         => 'StatsTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxLoggedInAgents) {
            $res['MaxLoggedInAgents'] = $this->maxLoggedInAgents;
        }

        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
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
        if (isset($map['MaxLoggedInAgents'])) {
            $model->maxLoggedInAgents = $map['MaxLoggedInAgents'];
        }

        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }

        return $model;
    }
}
