<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport\inbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport\outbound;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport\overall;
use AlibabaCloud\Tea\Model;

class skillGroupSummaryReport extends Model
{
    /**
     * @var overall
     */
    public $overall;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $skillGroupId;

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
    public $timestamp;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'overall'        => 'Overall',
        'skillGroupName' => 'SkillGroupName',
        'skillGroupId'   => 'SkillGroupId',
        'inbound'        => 'Inbound',
        'outbound'       => 'Outbound',
        'timestamp'      => 'Timestamp',
        'instanceId'     => 'InstanceId',
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
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupSummaryReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
