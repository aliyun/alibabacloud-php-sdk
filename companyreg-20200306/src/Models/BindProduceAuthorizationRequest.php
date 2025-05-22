<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class BindProduceAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $authorizedUserIds;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'authorizedUserIds' => 'AuthorizedUserIds',
        'bizId' => 'BizId',
        'bizType' => 'BizType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
