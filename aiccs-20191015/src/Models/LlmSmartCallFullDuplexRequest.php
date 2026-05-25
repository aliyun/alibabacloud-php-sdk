<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallFullDuplexRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var mixed[]
     */
    public $startWordParam;

    /**
     * @var int
     */
    public $ttsSpeed;

    /**
     * @var string
     */
    public $ttsVoiceCode;

    /**
     * @var int
     */
    public $ttsVolume;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'outId' => 'OutId',
        'sessionTimeout' => 'SessionTimeout',
        'startWordParam' => 'StartWordParam',
        'ttsSpeed' => 'TtsSpeed',
        'ttsVoiceCode' => 'TtsVoiceCode',
        'ttsVolume' => 'TtsVolume',
    ];

    public function validate()
    {
        if (\is_array($this->startWordParam)) {
            Model::validateArray($this->startWordParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->startWordParam) {
            if (\is_array($this->startWordParam)) {
                $res['StartWordParam'] = [];
                foreach ($this->startWordParam as $key1 => $value1) {
                    $res['StartWordParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }

        if (null !== $this->ttsVoiceCode) {
            $res['TtsVoiceCode'] = $this->ttsVoiceCode;
        }

        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['StartWordParam'])) {
            if (!empty($map['StartWordParam'])) {
                $model->startWordParam = [];
                foreach ($map['StartWordParam'] as $key1 => $value1) {
                    $model->startWordParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }

        if (isset($map['TtsVoiceCode'])) {
            $model->ttsVoiceCode = $map['TtsVoiceCode'];
        }

        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }

        return $model;
    }
}
