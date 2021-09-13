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
     * @var overall
     */
    public $overall;
    protected $_name = [
        'skillGroupName' => 'SkillGroupName',
        'skillGroupId'   => 'SkillGroupId',
        'inbound'        => 'Inbound',
        'outbound'       => 'Outbound',
        'overall'        => 'Overall',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
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
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }

        return $model;
    }
}
