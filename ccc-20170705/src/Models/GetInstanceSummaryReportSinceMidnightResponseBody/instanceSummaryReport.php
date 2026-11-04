<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportSinceMidnightResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportSinceMidnightResponseBody\instanceSummaryReport\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportSinceMidnightResponseBody\instanceSummaryReport\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportSinceMidnightResponseBody\instanceSummaryReport\overall;

class instanceSummaryReport extends Model
{
    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var overall
     */
    public $overall;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'inbound' => 'Inbound',
        'instanceId' => 'InstanceId',
        'outbound' => 'Outbound',
        'overall' => 'Overall',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->inbound) {
            $this->inbound->validate();
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
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toArray($noStream) : $this->inbound;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toArray($noStream) : $this->outbound;
        }

        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toArray($noStream) : $this->overall;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }

        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
