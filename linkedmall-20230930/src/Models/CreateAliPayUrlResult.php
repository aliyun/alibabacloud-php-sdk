<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateAliPayUrlResult extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $memberId;
    /**
     * @var string
     */
    public $zftWithholdSignUrl;
    protected $_name = [
        'accountId'          => 'accountId',
        'memberId'           => 'memberId',
        'zftWithholdSignUrl' => 'zftWithholdSignUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->memberId) {
            $res['memberId'] = $this->memberId;
        }

        if (null !== $this->zftWithholdSignUrl) {
            $res['zftWithholdSignUrl'] = $this->zftWithholdSignUrl;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['memberId'])) {
            $model->memberId = $map['memberId'];
        }

        if (isset($map['zftWithholdSignUrl'])) {
            $model->zftWithholdSignUrl = $map['zftWithholdSignUrl'];
        }

        return $model;
    }
}
