<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList\instanceSummaryReport\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList\instanceSummaryReport\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList\instanceSummaryReport\overall;
use AlibabaCloud\Tea\Model;

class instanceSummaryReport extends Model
{
    /**
     * @var overall
     */
    public $overall;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'overall'    => 'Overall',
        'inbound'    => 'Inbound',
        'outbound'   => 'Outbound',
        'instanceId' => 'InstanceId',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSummaryReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
