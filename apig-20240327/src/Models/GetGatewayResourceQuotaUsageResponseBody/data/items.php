<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResourceQuotaUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $applicable;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $limitScope;

    /**
     * @var string
     */
    public $quotaKey;

    /**
     * @var int
     */
    public $used;

    /**
     * @var string
     */
    public $usedScope;
    protected $_name = [
        'applicable' => 'applicable',
        'limit' => 'limit',
        'limitScope' => 'limitScope',
        'quotaKey' => 'quotaKey',
        'used' => 'used',
        'usedScope' => 'usedScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicable) {
            $res['applicable'] = $this->applicable;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->limitScope) {
            $res['limitScope'] = $this->limitScope;
        }

        if (null !== $this->quotaKey) {
            $res['quotaKey'] = $this->quotaKey;
        }

        if (null !== $this->used) {
            $res['used'] = $this->used;
        }

        if (null !== $this->usedScope) {
            $res['usedScope'] = $this->usedScope;
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
        if (isset($map['applicable'])) {
            $model->applicable = $map['applicable'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['limitScope'])) {
            $model->limitScope = $map['limitScope'];
        }

        if (isset($map['quotaKey'])) {
            $model->quotaKey = $map['quotaKey'];
        }

        if (isset($map['used'])) {
            $model->used = $map['used'];
        }

        if (isset($map['usedScope'])) {
            $model->usedScope = $map['usedScope'];
        }

        return $model;
    }
}
