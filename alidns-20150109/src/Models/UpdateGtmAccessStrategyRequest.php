<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmAccessStrategyRequest extends Model
{
    /**
     * @description The line codes of access regions.
     *
     * @example ["default", "mobile"]
     *
     * @var string
     */
    public $accessLines;

    /**
     * @description The ID of the default address pool.
     *
     * @example hrsix
     *
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @description The ID of the failover address pool.
     *
     * @example hrsyw
     *
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description The language used by the user.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the access policy that you want to query for the GTM instance.
     *
     * This parameter is required.
     * @example hrmxc
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description The name of the access policy.
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'accessLines'        => 'AccessLines',
        'defaultAddrPoolId'  => 'DefaultAddrPoolId',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'lang'               => 'Lang',
        'strategyId'         => 'StrategyId',
        'strategyName'       => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLines) {
            $res['AccessLines'] = $this->accessLines;
        }
        if (null !== $this->defaultAddrPoolId) {
            $res['DefaultAddrPoolId'] = $this->defaultAddrPoolId;
        }
        if (null !== $this->failoverAddrPoolId) {
            $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGtmAccessStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLines'])) {
            $model->accessLines = $map['AccessLines'];
        }
        if (isset($map['DefaultAddrPoolId'])) {
            $model->defaultAddrPoolId = $map['DefaultAddrPoolId'];
        }
        if (isset($map['FailoverAddrPoolId'])) {
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
