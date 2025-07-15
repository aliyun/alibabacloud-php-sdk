<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\back2Back;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\overall;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var back2Back
     */
    public $back2Back;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var overall
     */
    public $overall;

    /**
     * @example 1604639129000
     *
     * @var int
     */
    public $statsTime;
    protected $_name = [
        'back2Back' => 'Back2Back',
        'inbound' => 'Inbound',
        'outbound' => 'Outbound',
        'overall' => 'Overall',
        'statsTime' => 'StatsTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->back2Back) {
            $res['Back2Back'] = null !== $this->back2Back ? $this->back2Back->toMap() : null;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Back2Back'])) {
            $model->back2Back = back2Back::fromMap($map['Back2Back']);
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }
        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }

        return $model;
    }
}
