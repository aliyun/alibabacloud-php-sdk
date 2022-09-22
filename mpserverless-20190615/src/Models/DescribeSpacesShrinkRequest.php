<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpacesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $emasWorkspaceId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $spaceIdsShrink;

    /**
     * @var string
     */
    public $specCode;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'emasWorkspaceId' => 'EmasWorkspaceId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'spaceIdsShrink'  => 'SpaceIds',
        'specCode'        => 'SpecCode',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emasWorkspaceId) {
            $res['EmasWorkspaceId'] = $this->emasWorkspaceId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->spaceIdsShrink) {
            $res['SpaceIds'] = $this->spaceIdsShrink;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpacesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmasWorkspaceId'])) {
            $model->emasWorkspaceId = $map['EmasWorkspaceId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SpaceIds'])) {
            $model->spaceIdsShrink = $map['SpaceIds'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
