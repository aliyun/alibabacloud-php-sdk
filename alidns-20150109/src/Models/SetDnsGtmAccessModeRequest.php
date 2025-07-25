<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDnsGtmAccessModeRequest extends Model
{
    /**
     * @description The switchover policy for primary and secondary address pool sets. Valid values:
     *
     *   AUTO: performs automatic switchover between the primary and secondary address pool sets upon failures.
     *   DEFAULT: the primary address pool set
     *   FAILOVER: the secondary address pool set
     *
     * This parameter is required.
     *
     * @example auto
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description The language of the values for specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The policy ID.
     *
     * This parameter is required.
     *
     * @example strategyId
     *
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'accessMode' => 'AccessMode',
        'lang' => 'Lang',
        'strategyId' => 'StrategyId',
    ];

    public function validate() {}

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
     * @return SetDnsGtmAccessModeRequest
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
