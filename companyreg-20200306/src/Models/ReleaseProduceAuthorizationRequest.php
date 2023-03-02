<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class ReleaseProduceAuthorizationRequest extends Model
{
    /**
     * @example 1219541161213000
     *
     * @var string
     */
    public $authorizedUserId;

    /**
     * @example P20211117141528000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.beian_assist
     *
     * @var string
     */
    public $bizType;
    protected $_name = [
        'authorizedUserId' => 'AuthorizedUserId',
        'bizId'            => 'BizId',
        'bizType'          => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseProduceAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
