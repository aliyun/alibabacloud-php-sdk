<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWifiResponseBody\taskStates;

class DescribeSagWifiResponseBody extends Model
{
    /**
     * @var string
     */
    public $authenticationType;

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
    public $encryptAlgorithm;

    /**
     * @var string
     */
    public $isAuth;

    /**
     * @var string
     */
    public $isBroadcast;

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
    public $ssid;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'authenticationType' => 'AuthenticationType',
        'bandwidth' => 'Bandwidth',
        'channel' => 'Channel',
        'encryptAlgorithm' => 'EncryptAlgorithm',
        'isAuth' => 'IsAuth',
        'isBroadcast' => 'IsBroadcast',
        'isEnable' => 'IsEnable',
        'requestId' => 'RequestId',
        'ssid' => 'Ssid',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
        if (\is_array($this->taskStates)) {
            Model::validateArray($this->taskStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }

        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }

        if (null !== $this->isBroadcast) {
            $res['IsBroadcast'] = $this->isBroadcast;
        }

        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ssid) {
            $res['Ssid'] = $this->ssid;
        }

        if (null !== $this->taskStates) {
            if (\is_array($this->taskStates)) {
                $res['TaskStates'] = [];
                $n1 = 0;
                foreach ($this->taskStates as $item1) {
                    $res['TaskStates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }

        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }

        if (isset($map['IsBroadcast'])) {
            $model->isBroadcast = $map['IsBroadcast'];
        }

        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Ssid'])) {
            $model->ssid = $map['Ssid'];
        }

        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n1 = 0;
                foreach ($map['TaskStates'] as $item1) {
                    $model->taskStates[$n1] = taskStates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
