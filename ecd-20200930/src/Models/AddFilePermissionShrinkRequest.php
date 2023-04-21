<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AddFilePermissionShrinkRequest extends Model
{
    /**
     * @example cn-hangzhou+cds-352282****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 6333e553a133ce21e6f747cf948bb9ef95d7****
     *
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $memberListShrink;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'            => 'CdsId',
        'endUserId'        => 'EndUserId',
        'fileId'           => 'FileId',
        'memberListShrink' => 'MemberList',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->memberListShrink) {
            $res['MemberList'] = $this->memberListShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFilePermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['MemberList'])) {
            $model->memberListShrink = $map['MemberList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
