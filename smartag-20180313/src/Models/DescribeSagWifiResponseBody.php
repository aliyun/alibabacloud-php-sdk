<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWifiResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagWifiResponseBody extends Model
{
    /**
     * @var string
     */
    public $isEnable;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $isAuth;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $ssid;

    /**
     * @var taskStates[]
     */
    public $taskStates;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @var string
     */
    public $isBroadcast;
    protected $_name = [
        'isEnable'           => 'IsEnable',
        'requestId'          => 'RequestId',
        'isAuth'             => 'IsAuth',
        'bandwidth'          => 'Bandwidth',
        'channel'            => 'Channel',
        'ssid'               => 'Ssid',
        'taskStates'         => 'TaskStates',
        'authenticationType' => 'AuthenticationType',
        'encryptAlgorithm'   => 'EncryptAlgorithm',
        'isBroadcast'        => 'IsBroadcast',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->ssid) {
            $res['Ssid'] = $this->ssid;
        }
        if (null !== $this->taskStates) {
            $res['TaskStates'] = [];
            if (null !== $this->taskStates && \is_array($this->taskStates)) {
                $n = 0;
                foreach ($this->taskStates as $item) {
                    $res['TaskStates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->isBroadcast) {
            $res['IsBroadcast'] = $this->isBroadcast;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagWifiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Ssid'])) {
            $model->ssid = $map['Ssid'];
        }
        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n                 = 0;
                foreach ($map['TaskStates'] as $item) {
                    $model->taskStates[$n++] = null !== $item ? taskStates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['IsBroadcast'])) {
            $model->isBroadcast = $map['IsBroadcast'];
        }

        return $model;
    }
}
