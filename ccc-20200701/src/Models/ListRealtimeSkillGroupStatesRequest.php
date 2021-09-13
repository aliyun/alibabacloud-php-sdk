<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListRealtimeSkillGroupStatesRequest extends Model
{
    /**
     * @var string
     */
    public $skillGroupIdList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'skillGroupIdList' => 'SkillGroupIdList',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRealtimeSkillGroupStatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupIdList'])) {
            $model->skillGroupIdList = $map['SkillGroupIdList'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
