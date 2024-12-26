<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationInstancesRequest extends Model
{
    /**
     * @description d700e680-aa4d-4ec1-afc2-6566b5ff\\*\\*\\*\\*
     *
     * This parameter is required.
     * @example d700e680-aa4d-4ec1-afc2-6566b5ff****
     *
     * @var string
     */
    public $appId;

    /**
     * @description 1
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description b2a8a925-477a-4ed7-b825-d5e22500\\*\\*\\*\\*
     *
     * This parameter is required.
     * @example b2a8a925-477a-4ed7-b825-d5e22500****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @description 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description true
     *
     * @example true
     *
     * @var bool
     */
    public $reverse;
    protected $_name = [
        'appId'       => 'AppId',
        'currentPage' => 'CurrentPage',
        'groupId'     => 'GroupId',
        'instanceId'  => 'InstanceId',
        'pageSize'    => 'PageSize',
        'reverse'     => 'Reverse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        return $model;
    }
}
