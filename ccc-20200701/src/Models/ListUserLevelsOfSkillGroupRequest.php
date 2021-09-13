<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListUserLevelsOfSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var bool
     */
    public $isMember;

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
    public $searchPattern;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'skillGroupId'  => 'SkillGroupId',
        'isMember'      => 'IsMember',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'searchPattern' => 'SearchPattern',
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
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->isMember) {
            $res['IsMember'] = $this->isMember;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserLevelsOfSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['IsMember'])) {
            $model->isMember = $map['IsMember'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }

        return $model;
    }
}
