<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserEntitlementRequest extends Model
{
    /**
     * @description The IDs of the cloud computers to which you want to add end users.
     *
     * @var string[]
     */
    public $authorizeDesktopId;

    /**
     * @description The ID of the users.
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the cloud computers whose end users you want to remove.
     *
     * @var string[]
     */
    public $revokeDesktopId;
    protected $_name = [
        'authorizeDesktopId' => 'AuthorizeDesktopId',
        'endUserId'          => 'EndUserId',
        'regionId'           => 'RegionId',
        'revokeDesktopId'    => 'RevokeDesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeDesktopId) {
            $res['AuthorizeDesktopId'] = $this->authorizeDesktopId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->revokeDesktopId) {
            $res['RevokeDesktopId'] = $this->revokeDesktopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserEntitlementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeDesktopId'])) {
            if (!empty($map['AuthorizeDesktopId'])) {
                $model->authorizeDesktopId = $map['AuthorizeDesktopId'];
            }
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RevokeDesktopId'])) {
            if (!empty($map['RevokeDesktopId'])) {
                $model->revokeDesktopId = $map['RevokeDesktopId'];
            }
        }

        return $model;
    }
}
