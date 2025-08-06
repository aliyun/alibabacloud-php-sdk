<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateOrgHonorTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $avatarFrameMediaId;

    /**
     * @var string
     */
    public $defaultBgColor;

    /**
     * @var string
     */
    public $medalDesc;

    /**
     * @var string
     */
    public $medalMediaId;

    /**
     * @var string
     */
    public $medalName;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'avatarFrameMediaId' => 'avatarFrameMediaId',
        'defaultBgColor' => 'defaultBgColor',
        'medalDesc' => 'medalDesc',
        'medalMediaId' => 'medalMediaId',
        'medalName' => 'medalName',
        'orgId' => 'orgId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
