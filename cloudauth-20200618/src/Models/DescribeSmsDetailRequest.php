<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmsDetailRequest extends Model
{
    /**
     * @example qwer^xxxxx
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example SP_UNKNOWN_ERROR
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 150000xxxx
     *
     * @var string
     */
    public $mobile;

    /**
     * @example qwertyuiopasdfghjklzxcvbnmqxxxx
     *
     * @var string
     */
    public $outerOrderNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 20210428
     *
     * @var string
     */
    public $sendDate;

    /**
     * @example FAILED
     *
     * @var string
     */
    public $sendStatus;

    /**
     * @var string
     */
    public $signName;

    /**
     * @example SMS_0000
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'bizId'        => 'BizId',
        'currentPage'  => 'CurrentPage',
        'errorCode'    => 'ErrorCode',
        'mobile'       => 'Mobile',
        'outerOrderNo' => 'OuterOrderNo',
        'pageSize'     => 'PageSize',
        'sendDate'     => 'SendDate',
        'sendStatus'   => 'SendStatus',
        'signName'     => 'SignName',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmsDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
