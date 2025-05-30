<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class AddGtmAccessStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $accessLines;

    /**
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'accessLines' => 'AccessLines',
        'defaultAddrPoolId' => 'DefaultAddrPoolId',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'strategyName' => 'StrategyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
