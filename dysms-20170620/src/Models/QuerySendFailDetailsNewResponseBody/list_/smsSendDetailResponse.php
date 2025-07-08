<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendFailDetailsNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class smsSendDetailResponse extends Model
{
    /**
     * @var int
     */
    public $blackListStatus;

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
    public $errCodeDesc;

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
    public $receiveDateStr;

    /**
     * @var string
     */
    public $sendDateStr;

    /**
     * @var int
     */
    public $sendStatus;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'blackListStatus' => 'BlackListStatus',
        'content' => 'Content',
        'errCode' => 'ErrCode',
        'errCodeDesc' => 'ErrCodeDesc',
        'outId' => 'OutId',
        'phoneNum' => 'PhoneNum',
        'receiveDateStr' => 'ReceiveDateStr',
        'sendDateStr' => 'SendDateStr',
        'sendStatus' => 'SendStatus',
        'suggestion' => 'Suggestion',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackListStatus) {
            $res['BlackListStatus'] = $this->blackListStatus;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errCodeDesc) {
            $res['ErrCodeDesc'] = $this->errCodeDesc;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }

        if (null !== $this->receiveDateStr) {
            $res['ReceiveDateStr'] = $this->receiveDateStr;
        }

        if (null !== $this->sendDateStr) {
            $res['SendDateStr'] = $this->sendDateStr;
        }

        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['BlackListStatus'])) {
            $model->blackListStatus = $map['BlackListStatus'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrCodeDesc'])) {
            $model->errCodeDesc = $map['ErrCodeDesc'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }

        if (isset($map['ReceiveDateStr'])) {
            $model->receiveDateStr = $map['ReceiveDateStr'];
        }

        if (isset($map['SendDateStr'])) {
            $model->sendDateStr = $map['SendDateStr'];
        }

        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
