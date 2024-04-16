<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest;

use AlibabaCloud\Tea\Model;

class targetInfo extends Model
{
    /**
     * @example apk包名
     *
     * @var string
     */
    public $encodeKey;

    /**
     * @example PACKAGE_NAME
     *
     * @var string
     */
    public $encodeType;

    /**
     * @example 11
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 2VpiDQ6aMjxz******Eo7r6e08oIVZ3fKrm5TyEfY=
     *
     * @var string
     */
    public $targetIdentity;

    /**
     * @example DEVICE_OPEN_ID
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'encodeKey'      => 'EncodeKey',
        'encodeType'     => 'EncodeType',
        'organizationId' => 'OrganizationId',
        'targetIdentity' => 'TargetIdentity',
        'targetType'     => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeKey) {
            $res['EncodeKey'] = $this->encodeKey;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->targetIdentity) {
            $res['TargetIdentity'] = $this->targetIdentity;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeKey'])) {
            $model->encodeKey = $map['EncodeKey'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['TargetIdentity'])) {
            $model->targetIdentity = $map['TargetIdentity'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
