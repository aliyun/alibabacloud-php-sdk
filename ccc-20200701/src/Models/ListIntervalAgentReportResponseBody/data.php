<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\back2Back;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\internal;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\overall;

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
     * @var internal
     */
    public $internal;
    /**
     * @var outbound
     */
    public $outbound;
    /**
     * @var overall
     */
    public $overall;
    /**
     * @var int
     */
    public $statsTime;
    protected $_name = [
        'back2Back' => 'Back2Back',
        'inbound'   => 'Inbound',
        'internal'  => 'Internal',
        'outbound'  => 'Outbound',
        'overall'   => 'Overall',
        'statsTime' => 'StatsTime',
    ];

    public function validate()
    {
        if (null !== $this->back2Back) {
            $this->back2Back->validate();
        }
        if (null !== $this->inbound) {
            $this->inbound->validate();
        }
        if (null !== $this->internal) {
            $this->internal->validate();
        }
        if (null !== $this->outbound) {
            $this->outbound->validate();
        }
        if (null !== $this->overall) {
            $this->overall->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->back2Back) {
            $res['Back2Back'] = null !== $this->back2Back ? $this->back2Back->toArray($noStream) : $this->back2Back;
        }

        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toArray($noStream) : $this->inbound;
        }

        if (null !== $this->internal) {
            $res['Internal'] = null !== $this->internal ? $this->internal->toArray($noStream) : $this->internal;
        }

        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toArray($noStream) : $this->outbound;
        }

        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toArray($noStream) : $this->overall;
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
        if (isset($map['Back2Back'])) {
            $model->back2Back = back2Back::fromMap($map['Back2Back']);
        }

        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }

        if (isset($map['Internal'])) {
            $model->internal = internal::fromMap($map['Internal']);
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
