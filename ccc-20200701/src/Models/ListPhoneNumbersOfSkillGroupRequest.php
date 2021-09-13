<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListPhoneNumbersOfSkillGroupRequest extends Model
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
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $isMember;

    /**
     * @var string
     */
    public $searchPattern;

    /**
     * @var bool
     */
    public $active;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'skillGroupId'  => 'SkillGroupId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'isMember'      => 'IsMember',
        'searchPattern' => 'SearchPattern',
        'active'        => 'Active',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->isMember) {
            $res['IsMember'] = $this->isMember;
        }
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhoneNumbersOfSkillGroupRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['IsMember'])) {
            $model->isMember = $map['IsMember'];
        }
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        return $model;
    }
}
