<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CheckThirdRightSendPlanResponseBody;

use AlibabaCloud\Tea\Model;

class retValue extends Model
{
    /**
     * @example "1713262192005"
     *
     * @var string
     */
    public $activateDate;

    /**
     * @example 1001 日卡 1002 月卡 1003 季卡 1004 年卡
     *
     * @var int
     */
    public $cardType;

    /**
     * @example TB
     *
     * @var string
     */
    public $channelCode;

    /**
     * @example 淘宝
     *
     * @var string
     */
    public $channelName;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @example 908FA068-529C-0C20-8DB5-63B0EF7CFF1F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example "1713262192005"
     *
     * @var string
     */
    public $rightsExpiredDate;
    protected $_name = [
        'activateDate'      => 'ActivateDate',
        'cardType'          => 'CardType',
        'channelCode'       => 'ChannelCode',
        'channelName'       => 'ChannelName',
        'extendInfo'        => 'ExtendInfo',
        'requestId'         => 'RequestId',
        'rightsExpiredDate' => 'RightsExpiredDate',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rightsExpiredDate) {
            $res['RightsExpiredDate'] = $this->rightsExpiredDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retValue
     */
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
            $model->extendInfo = $map['ExtendInfo'];
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
