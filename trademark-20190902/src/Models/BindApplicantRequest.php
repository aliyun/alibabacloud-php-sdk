<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class BindApplicantRequest extends Model
{
    /**
     * @example 123456789
     *
     * @var string
     */
    public $applicantId;

    /**
     * @example 1234567890/attorney/asdfghjkl.jpg
     *
     * @var string
     */
    public $authorizationOssKey;

    /**
     * @example trademark_register-cn-123456789
     *
     * @var string
     */
    public $bizId;
    protected $_name = [
        'applicantId'         => 'ApplicantId',
        'authorizationOssKey' => 'AuthorizationOssKey',
        'bizId'               => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }
        if (null !== $this->authorizationOssKey) {
            $res['AuthorizationOssKey'] = $this->authorizationOssKey;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindApplicantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }
        if (isset($map['AuthorizationOssKey'])) {
            $model->authorizationOssKey = $map['AuthorizationOssKey'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
