<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\overall;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @example ccc-test
     *
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
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @example 2018-09-13 00:00:00
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'inbound'        => 'Inbound',
        'instanceId'     => 'InstanceId',
        'outbound'       => 'Outbound',
        'overall'        => 'Overall',
        'skillGroupId'   => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
        'timestamp'      => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
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
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
