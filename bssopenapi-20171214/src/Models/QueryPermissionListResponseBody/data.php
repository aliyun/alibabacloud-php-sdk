<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody\data\permissionList;

class data extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $masterId;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var permissionList[]
     */
    public $permissionList;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $setupTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'endTime' => 'EndTime',
        'masterId' => 'MasterId',
        'memberId' => 'MemberId',
        'permissionList' => 'PermissionList',
        'relationType' => 'RelationType',
        'setupTime' => 'SetupTime',
        'startTime' => 'StartTime',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->permissionList)) {
            Model::validateArray($this->permissionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->masterId) {
            $res['MasterId'] = $this->masterId;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->permissionList) {
            if (\is_array($this->permissionList)) {
                $res['PermissionList'] = [];
                $n1 = 0;
                foreach ($this->permissionList as $item1) {
                    $res['PermissionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->setupTime) {
            $res['SetupTime'] = $this->setupTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MasterId'])) {
            $model->masterId = $map['MasterId'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['PermissionList'])) {
            if (!empty($map['PermissionList'])) {
                $model->permissionList = [];
                $n1 = 0;
                foreach ($map['PermissionList'] as $item1) {
                    $model->permissionList[$n1] = permissionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['SetupTime'])) {
            $model->setupTime = $map['SetupTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
