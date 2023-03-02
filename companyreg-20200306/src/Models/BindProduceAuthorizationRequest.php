<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class BindProduceAuthorizationRequest extends Model
{
    /**
     * @example 1219541161213057,1219541161213059
     *
     * @var string
     */
    public $authorizedUserIds;

    /**
     * @example P20210815211849000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example esp.bookkeeping_ai
     *
     * @var string
     */
    public $bizType;
    protected $_name = [
        'authorizedUserIds' => 'AuthorizedUserIds',
        'bizId'             => 'BizId',
        'bizType'           => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedUserIds) {
            $res['AuthorizedUserIds'] = $this->authorizedUserIds;
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
     * @return BindProduceAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedUserIds'])) {
            $model->authorizedUserIds = $map['AuthorizedUserIds'];
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
