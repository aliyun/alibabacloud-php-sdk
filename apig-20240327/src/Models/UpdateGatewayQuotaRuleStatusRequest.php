<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayQuotaRuleStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $clearHistory;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'clearHistory' => 'clearHistory',
        'enable' => 'enable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clearHistory) {
            $res['clearHistory'] = $this->clearHistory;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
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
        if (isset($map['clearHistory'])) {
            $model->clearHistory = $map['clearHistory'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}
