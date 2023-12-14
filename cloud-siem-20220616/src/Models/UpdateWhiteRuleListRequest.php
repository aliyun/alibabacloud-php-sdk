<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class UpdateWhiteRuleListRequest extends Model
{
    /**
     * @description The alert whitelist rule. The value is a JSON object.
     *
     * @example [
     * ]
     * @var string
     */
    public $expression;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The unique ID of the whitelist rule.
     *
     * @example 123456789
     *
     * @var int
     */
    public $whiteRuleId;
    protected $_name = [
        'expression'   => 'Expression',
        'incidentUuid' => 'IncidentUuid',
        'regionId'     => 'RegionId',
        'whiteRuleId'  => 'WhiteRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->whiteRuleId) {
            $res['WhiteRuleId'] = $this->whiteRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWhiteRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WhiteRuleId'])) {
            $model->whiteRuleId = $map['WhiteRuleId'];
        }

        return $model;
    }
}
