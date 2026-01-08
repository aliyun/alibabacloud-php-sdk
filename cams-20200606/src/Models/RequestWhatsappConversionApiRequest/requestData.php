<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\RequestWhatsappConversionApiRequest;

use AlibabaCloud\Dara\Model;

class requestData extends Model
{
    /**
     * @var string
     */
    public $actionSource;

    /**
     * @var mixed[]
     */
    public $appData;

    /**
     * @var mixed[]
     */
    public $customData;

    /**
     * @var string[]
     */
    public $dataProcessingOptions;

    /**
     * @var int
     */
    public $dataProcessingOptionsCountry;

    /**
     * @var int
     */
    public $dataProcessingOptionsState;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventSourceUrl;

    /**
     * @var int
     */
    public $eventTime;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var string
     */
    public $messagingChannel;

    /**
     * @var bool
     */
    public $optOut;

    /**
     * @var mixed[]
     */
    public $userData;
    protected $_name = [
        'actionSource' => 'ActionSource',
        'appData' => 'AppData',
        'customData' => 'CustomData',
        'dataProcessingOptions' => 'DataProcessingOptions',
        'dataProcessingOptionsCountry' => 'DataProcessingOptionsCountry',
        'dataProcessingOptionsState' => 'DataProcessingOptionsState',
        'eventId' => 'EventId',
        'eventName' => 'EventName',
        'eventSourceUrl' => 'EventSourceUrl',
        'eventTime' => 'EventTime',
        'extInfo' => 'ExtInfo',
        'messagingChannel' => 'MessagingChannel',
        'optOut' => 'OptOut',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->appData)) {
            Model::validateArray($this->appData);
        }
        if (\is_array($this->customData)) {
            Model::validateArray($this->customData);
        }
        if (\is_array($this->dataProcessingOptions)) {
            Model::validateArray($this->dataProcessingOptions);
        }
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        if (\is_array($this->userData)) {
            Model::validateArray($this->userData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionSource) {
            $res['ActionSource'] = $this->actionSource;
        }

        if (null !== $this->appData) {
            if (\is_array($this->appData)) {
                $res['AppData'] = [];
                foreach ($this->appData as $key1 => $value1) {
                    $res['AppData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->customData) {
            if (\is_array($this->customData)) {
                $res['CustomData'] = [];
                foreach ($this->customData as $key1 => $value1) {
                    $res['CustomData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataProcessingOptions) {
            if (\is_array($this->dataProcessingOptions)) {
                $res['DataProcessingOptions'] = [];
                $n1 = 0;
                foreach ($this->dataProcessingOptions as $item1) {
                    $res['DataProcessingOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataProcessingOptionsCountry) {
            $res['DataProcessingOptionsCountry'] = $this->dataProcessingOptionsCountry;
        }

        if (null !== $this->dataProcessingOptionsState) {
            $res['DataProcessingOptionsState'] = $this->dataProcessingOptionsState;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventSourceUrl) {
            $res['EventSourceUrl'] = $this->eventSourceUrl;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['ExtInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['ExtInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->messagingChannel) {
            $res['MessagingChannel'] = $this->messagingChannel;
        }

        if (null !== $this->optOut) {
            $res['OptOut'] = $this->optOut;
        }

        if (null !== $this->userData) {
            if (\is_array($this->userData)) {
                $res['UserData'] = [];
                foreach ($this->userData as $key1 => $value1) {
                    $res['UserData'][$key1] = $value1;
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
        if (isset($map['ActionSource'])) {
            $model->actionSource = $map['ActionSource'];
        }

        if (isset($map['AppData'])) {
            if (!empty($map['AppData'])) {
                $model->appData = [];
                foreach ($map['AppData'] as $key1 => $value1) {
                    $model->appData[$key1] = $value1;
                }
            }
        }

        if (isset($map['CustomData'])) {
            if (!empty($map['CustomData'])) {
                $model->customData = [];
                foreach ($map['CustomData'] as $key1 => $value1) {
                    $model->customData[$key1] = $value1;
                }
            }
        }

        if (isset($map['DataProcessingOptions'])) {
            if (!empty($map['DataProcessingOptions'])) {
                $model->dataProcessingOptions = [];
                $n1 = 0;
                foreach ($map['DataProcessingOptions'] as $item1) {
                    $model->dataProcessingOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataProcessingOptionsCountry'])) {
            $model->dataProcessingOptionsCountry = $map['DataProcessingOptionsCountry'];
        }

        if (isset($map['DataProcessingOptionsState'])) {
            $model->dataProcessingOptionsState = $map['DataProcessingOptionsState'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventSourceUrl'])) {
            $model->eventSourceUrl = $map['EventSourceUrl'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['ExtInfo'])) {
            if (!empty($map['ExtInfo'])) {
                $model->extInfo = [];
                foreach ($map['ExtInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['MessagingChannel'])) {
            $model->messagingChannel = $map['MessagingChannel'];
        }

        if (isset($map['OptOut'])) {
            $model->optOut = $map['OptOut'];
        }

        if (isset($map['UserData'])) {
            if (!empty($map['UserData'])) {
                $model->userData = [];
                foreach ($map['UserData'] as $key1 => $value1) {
                    $model->userData[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
