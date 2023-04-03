<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmAccessStrategyRequest extends Model
{
    /**
     * @description The line codes of access regions.
     *
     * @example ["default", "drpeng"]
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
     * If the failover address pool is not set, pass the **Empty** value.
     * @example hrsyw
     *
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description The ID of the GTM instance for which you want to create an access policy.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language used by the user.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

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
        'instanceId'         => 'InstanceId',
        'lang'               => 'Lang',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGtmAccessStrategyRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
