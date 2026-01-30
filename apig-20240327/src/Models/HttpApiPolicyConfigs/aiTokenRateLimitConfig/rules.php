<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiTokenRateLimitConfig;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $limitMode;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var string
     */
    public $limitValue;

    /**
     * @var string
     */
    public $matchKey;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $matchValue;
    protected $_name = [
        'limitMode' => 'limitMode',
        'limitType' => 'limitType',
        'limitValue' => 'limitValue',
        'matchKey' => 'matchKey',
        'matchType' => 'matchType',
        'matchValue' => 'matchValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limitMode) {
            $res['limitMode'] = $this->limitMode;
        }

        if (null !== $this->limitType) {
            $res['limitType'] = $this->limitType;
        }

        if (null !== $this->limitValue) {
            $res['limitValue'] = $this->limitValue;
        }

        if (null !== $this->matchKey) {
            $res['matchKey'] = $this->matchKey;
        }

        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }

        if (null !== $this->matchValue) {
            $res['matchValue'] = $this->matchValue;
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
        if (isset($map['limitMode'])) {
            $model->limitMode = $map['limitMode'];
        }

        if (isset($map['limitType'])) {
            $model->limitType = $map['limitType'];
        }

        if (isset($map['limitValue'])) {
            $model->limitValue = $map['limitValue'];
        }

        if (isset($map['matchKey'])) {
            $model->matchKey = $map['matchKey'];
        }

        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }

        if (isset($map['matchValue'])) {
            $model->matchValue = $map['matchValue'];
        }

        return $model;
    }
}
