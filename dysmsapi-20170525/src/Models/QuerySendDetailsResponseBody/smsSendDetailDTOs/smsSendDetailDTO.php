<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponseBody\smsSendDetailDTOs;

use AlibabaCloud\Tea\Model;

class smsSendDetailDTO extends Model
{
    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $receiveDate;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $sendStatus;
    protected $_name = [
        'errCode'      => 'ErrCode',
        'templateCode' => 'TemplateCode',
        'outId'        => 'OutId',
        'receiveDate'  => 'ReceiveDate',
        'sendDate'     => 'SendDate',
        'phoneNum'     => 'PhoneNum',
        'content'      => 'Content',
        'sendStatus'   => 'SendStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->receiveDate) {
            $res['ReceiveDate'] = $this->receiveDate;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsSendDetailDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }

        return $model;
    }
}
