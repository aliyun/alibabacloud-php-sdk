<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class ExchangeEntitlementRequest extends Model
{
    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $keyHash;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'externalUserId' => 'externalUserId',
        'keyHash' => 'keyHash',
        'requestId' => 'requestId',
        'templateId' => 'templateId',
        'userName' => 'userName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalUserId) {
            $res['externalUserId'] = $this->externalUserId;
        }

        if (null !== $this->keyHash) {
            $res['keyHash'] = $this->keyHash;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['externalUserId'])) {
            $model->externalUserId = $map['externalUserId'];
        }

        if (isset($map['keyHash'])) {
            $model->keyHash = $map['keyHash'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
