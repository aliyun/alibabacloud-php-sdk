<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListApiKeysResponseBody\data;

use AlibabaCloud\Dara\Model;

class customKeyList extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var bool
     */
    public $isRateLimited;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var float
     */
    public $limitRate;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var int
     */
    public $tokenQuota;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'isRateLimited' => 'IsRateLimited',
        'keyName' => 'KeyName',
        'limitRate' => 'LimitRate',
        'limitType' => 'LimitType',
        'tokenQuota' => 'TokenQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->isRateLimited) {
            $res['IsRateLimited'] = $this->isRateLimited;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->limitRate) {
            $res['LimitRate'] = $this->limitRate;
        }

        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        if (null !== $this->tokenQuota) {
            $res['TokenQuota'] = $this->tokenQuota;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['IsRateLimited'])) {
            $model->isRateLimited = $map['IsRateLimited'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['LimitRate'])) {
            $model->limitRate = $map['LimitRate'];
        }

        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        if (isset($map['TokenQuota'])) {
            $model->tokenQuota = $map['TokenQuota'];
        }

        return $model;
    }
}
