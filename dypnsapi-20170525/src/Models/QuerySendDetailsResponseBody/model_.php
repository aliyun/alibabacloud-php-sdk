<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QuerySendDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description The content of the text message.
     *
     * @example 203160
     *
     * @var string
     */
    public $content;

    /**
     * @description The status code returned by the carrier.
     *
     *   If the text message was delivered, "DELIVERED" is returned.
     *   If the text message failed to be sent, see [Error codes](https://help.aliyun.com/document_detail/101347.html?spm=a2c4g.419277.0.i8) for more information.
     *
     * @example DELIVERED
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The extension field.
     *
     * @example 12131231
     *
     * @var string
     */
    public $outId;

    /**
     * @description The phone number.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @description The date and time when the text message was received.
     *
     * @example 2019-01-08 16:44:13
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @description The date when the text message was sent. You can query text messages that were sent within the last 30 days.
     *
     * The date is in the yyyyMMdd format. Example: 20181225.
     * @example 2019-01-08 16:44:13
     *
     * @var string
     */
    public $sendDate;

    /**
     * @description The delivery status of the text message.
     *
     *   1: A delivery receipt is to be sent.
     *   2: The text message failed to be sent.
     *   3: The text message was sent.
     *
     * @example 3
     *
     * @var int
     */
    public $sendStatus;

    /**
     * @description The code of the text message template.
     *
     * Log on to the SMS console. In the left-side navigation pane, click **Go China** or **Go Globe**. You can view the text message template code in the **Template Code** column on the **Message Templates** tab.
     *
     * >  The text message templates must be created on the Go Globe page and approved.
     * @example SMS_12231****
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'content'      => 'Content',
        'errCode'      => 'ErrCode',
        'outId'        => 'OutId',
        'phoneNum'     => 'PhoneNum',
        'receiveDate'  => 'ReceiveDate',
        'sendDate'     => 'SendDate',
        'sendStatus'   => 'SendStatus',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
