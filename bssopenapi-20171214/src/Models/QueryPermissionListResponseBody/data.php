<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody\data\permissionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2021-03-06T15:12Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1990699401005016
     *
     * @var int
     */
    public $masterId;

    /**
     * @example 1851253838840762
     *
     * @var int
     */
    public $memberId;

    /**
     * @var permissionList[]
     */
    public $permissionList;

    /**
     * @example FinancialManagement
     *
     * @var string
     */
    public $relationType;

    /**
     * @example 2021-03-02T15:12Z
     *
     * @var string
     */
    public $setupTime;

    /**
     * @example 2021-03-02T15:12Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RELATED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'endTime'        => 'EndTime',
        'masterId'       => 'MasterId',
        'memberId'       => 'MemberId',
        'permissionList' => 'PermissionList',
        'relationType'   => 'RelationType',
        'setupTime'      => 'SetupTime',
        'startTime'      => 'StartTime',
        'state'          => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['PermissionList'] = [];
            if (null !== $this->permissionList && \is_array($this->permissionList)) {
                $n = 0;
                foreach ($this->permissionList as $item) {
                    $res['PermissionList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                     = 0;
                foreach ($map['PermissionList'] as $item) {
                    $model->permissionList[$n++] = null !== $item ? permissionList::fromMap($item) : $item;
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
