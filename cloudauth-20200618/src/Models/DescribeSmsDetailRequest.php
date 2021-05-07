<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmsDetailRequest extends Model
{
    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $sendStatus;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $bizId;
    protected $_name = [
        'mobile'       => 'Mobile',
        'sendDate'     => 'SendDate',
        'errorCode'    => 'ErrorCode',
        'outerOrderNo' => 'OuterOrderNo',
        'sendStatus'   => 'SendStatus',
        'signName'     => 'SignName',
        'templateCode' => 'TemplateCode',
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
        'bizId'        => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
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
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
