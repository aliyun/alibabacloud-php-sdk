<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CheckThirdRightSendPlanResponseBody;

use AlibabaCloud\Dara\Model;

class retValue extends Model
{
    /**
     * @var string
     */
    public $activateDate;

    /**
     * @var int
     */
    public $cardType;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rightsExpiredDate;
    protected $_name = [
        'activateDate' => 'ActivateDate',
        'cardType' => 'CardType',
        'channelCode' => 'ChannelCode',
        'channelName' => 'ChannelName',
        'extendInfo' => 'ExtendInfo',
        'requestId' => 'RequestId',
        'rightsExpiredDate' => 'RightsExpiredDate',
    ];

    public function validate()
    {
        if (\is_array($this->extendInfo)) {
            Model::validateArray($this->extendInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activateDate) {
            $res['ActivateDate'] = $this->activateDate;
        }

        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }

        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->extendInfo) {
            if (\is_array($this->extendInfo)) {
                $res['ExtendInfo'] = [];
                foreach ($this->extendInfo as $key1 => $value1) {
                    $res['ExtendInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rightsExpiredDate) {
            $res['RightsExpiredDate'] = $this->rightsExpiredDate;
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
        if (isset($map['ActivateDate'])) {
            $model->activateDate = $map['ActivateDate'];
        }

        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }

        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['ExtendInfo'])) {
            if (!empty($map['ExtendInfo'])) {
                $model->extendInfo = [];
                foreach ($map['ExtendInfo'] as $key1 => $value1) {
                    $model->extendInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RightsExpiredDate'])) {
            $model->rightsExpiredDate = $map['RightsExpiredDate'];
        }

        return $model;
    }
}
