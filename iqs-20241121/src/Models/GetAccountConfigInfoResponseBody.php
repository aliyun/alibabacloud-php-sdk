<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class GetAccountConfigInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $availableTime;

    /**
     * @var string
     */
    public $billQps;

    /**
     * @var string
     */
    public $ladderType;

    /**
     * @var string
     */
    public $mainAccountId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountStatus' => 'accountStatus',
        'availableTime' => 'availableTime',
        'billQps' => 'billQps',
        'ladderType' => 'ladderType',
        'mainAccountId' => 'mainAccountId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['accountStatus'] = $this->accountStatus;
        }

        if (null !== $this->availableTime) {
            $res['availableTime'] = $this->availableTime;
        }

        if (null !== $this->billQps) {
            $res['billQps'] = $this->billQps;
        }

        if (null !== $this->ladderType) {
            $res['ladderType'] = $this->ladderType;
        }

        if (null !== $this->mainAccountId) {
            $res['mainAccountId'] = $this->mainAccountId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['accountStatus'])) {
            $model->accountStatus = $map['accountStatus'];
        }

        if (isset($map['availableTime'])) {
            $model->availableTime = $map['availableTime'];
        }

        if (isset($map['billQps'])) {
            $model->billQps = $map['billQps'];
        }

        if (isset($map['ladderType'])) {
            $model->ladderType = $map['ladderType'];
        }

        if (isset($map['mainAccountId'])) {
            $model->mainAccountId = $map['mainAccountId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
