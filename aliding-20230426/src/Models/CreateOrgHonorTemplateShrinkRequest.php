<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateOrgHonorTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example fsdfasdjf132342d
     *
     * @var string
     */
    public $avatarFrameMediaId;

    /**
     * @description This parameter is required.
     *
     * @example #FFFBB4
     *
     * @var string
     */
    public $defaultBgColor;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $medalDesc;

    /**
     * @description This parameter is required.
     *
     * @example 1273adf23
     *
     * @var string
     */
    public $medalMediaId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $medalName;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var int
     */
    public $orgId;

    /**
     * @description This parameter is required.
     *
     * @example 363784
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'avatarFrameMediaId'  => 'avatarFrameMediaId',
        'defaultBgColor'      => 'defaultBgColor',
        'medalDesc'           => 'medalDesc',
        'medalMediaId'        => 'medalMediaId',
        'medalName'           => 'medalName',
        'orgId'               => 'orgId',
        'userId'              => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->avatarFrameMediaId) {
            $res['avatarFrameMediaId'] = $this->avatarFrameMediaId;
        }
        if (null !== $this->defaultBgColor) {
            $res['defaultBgColor'] = $this->defaultBgColor;
        }
        if (null !== $this->medalDesc) {
            $res['medalDesc'] = $this->medalDesc;
        }
        if (null !== $this->medalMediaId) {
            $res['medalMediaId'] = $this->medalMediaId;
        }
        if (null !== $this->medalName) {
            $res['medalName'] = $this->medalName;
        }
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrgHonorTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['avatarFrameMediaId'])) {
            $model->avatarFrameMediaId = $map['avatarFrameMediaId'];
        }
        if (isset($map['defaultBgColor'])) {
            $model->defaultBgColor = $map['defaultBgColor'];
        }
        if (isset($map['medalDesc'])) {
            $model->medalDesc = $map['medalDesc'];
        }
        if (isset($map['medalMediaId'])) {
            $model->medalMediaId = $map['medalMediaId'];
        }
        if (isset($map['medalName'])) {
            $model->medalName = $map['medalName'];
        }
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
