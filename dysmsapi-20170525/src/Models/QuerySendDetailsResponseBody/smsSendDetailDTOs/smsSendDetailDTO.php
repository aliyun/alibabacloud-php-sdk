<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponseBody\smsSendDetailDTOs;

use AlibabaCloud\Dara\Model;

class smsSendDetailDTO extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $receiveDate;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var int
     */
    public $sendStatus;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'content' => 'Content',
        'errCode' => 'ErrCode',
        'outId' => 'OutId',
        'phoneNum' => 'PhoneNum',
        'receiveDate' => 'ReceiveDate',
        'sendDate' => 'SendDate',
        'sendStatus' => 'SendStatus',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
