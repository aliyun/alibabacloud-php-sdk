<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ClearOperatingObjectFavoritesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var int
     */
    public $remainingCount;

    /**
     * @var int
     */
    public $removedCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $verified;
    protected $_name = [
        'code' => 'code',
        'graphName' => 'graphName',
        'message' => 'message',
        'objectType' => 'objectType',
        'operatingObjectName' => 'operatingObjectName',
        'remainingCount' => 'remainingCount',
        'removedCount' => 'removedCount',
        'requestId' => 'requestId',
        'verified' => 'verified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->remainingCount) {
            $res['remainingCount'] = $this->remainingCount;
        }

        if (null !== $this->removedCount) {
            $res['removedCount'] = $this->removedCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->verified) {
            $res['verified'] = $this->verified;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['remainingCount'])) {
            $model->remainingCount = $map['remainingCount'];
        }

        if (isset($map['removedCount'])) {
            $model->removedCount = $map['removedCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['verified'])) {
            $model->verified = $map['verified'];
        }

        return $model;
    }
}
