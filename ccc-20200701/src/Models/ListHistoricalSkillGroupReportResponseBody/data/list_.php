<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponseBody\data\list_\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponseBody\data\list_\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalSkillGroupReportResponseBody\data\list_\overall;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
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
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example skillgroup
     *
     * @var string
     */
    public $skillGroupName;
    protected $_name = [
        'inbound'        => 'Inbound',
        'outbound'       => 'Outbound',
        'overall'        => 'Overall',
        'skillGroupId'   => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
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

        return $model;
    }
}
