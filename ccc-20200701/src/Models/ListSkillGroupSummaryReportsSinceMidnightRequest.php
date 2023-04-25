<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListSkillGroupSummaryReportsSinceMidnightRequest extends Model
{
    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ["skillgroup1@ccc-test", "skillgroup2@ccc-test2"]
     *
     * @var string
     */
    public $skillGroups;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'skillGroups' => 'SkillGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->skillGroups) {
            $res['SkillGroups'] = $this->skillGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSkillGroupSummaryReportsSinceMidnightRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SkillGroups'])) {
            $model->skillGroups = $map['SkillGroups'];
        }

        return $model;
    }
}
