<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetGtmAccessModeRequest extends Model
{
    /**
     * @description The desired access policy. Valid values:
     *
     *   **AUTO: performs automatic switchover between the primary and secondary address pool sets upon failures.**
     *   **DEFAULT: specifies the primary address pool set.**
     *   **FAILOVER: specifies the secondary address pool set.
     *
     * This parameter is required.
     * @example AUTO
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the access policy.
     *
     * This parameter is required.
     * @example hra0hx
     *
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'accessMode' => 'AccessMode',
        'lang'       => 'Lang',
        'strategyId' => 'StrategyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetGtmAccessModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
