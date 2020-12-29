<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDnsGtmAccessModeRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $accessMode;
    protected $_name = [
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
        'strategyId'   => 'StrategyId',
        'accessMode'   => 'AccessMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }

        return $model;
    }
}
