<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsNewResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $detailStsDate;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $sendSuccessRate;

    /**
     * @var int
     */
    public $sendTotal;

    /**
     * @var int
     */
    public $sendTotalFail;

    /**
     * @var int
     */
    public $sendTotalSuccess;

    /**
     * @var int
     */
    public $sendTotalUnknown;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'bizType' => 'BizType',
        'detailStsDate' => 'DetailStsDate',
        'downloadUrl' => 'DownloadUrl',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'sendSuccessRate' => 'SendSuccessRate',
        'sendTotal' => 'SendTotal',
        'sendTotalFail' => 'SendTotalFail',
        'sendTotalSuccess' => 'SendTotalSuccess',
        'sendTotalUnknown' => 'SendTotalUnknown',
        'signName' => 'SignName',
        'status' => 'Status',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->detailStsDate) {
            $res['DetailStsDate'] = $this->detailStsDate;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->sendSuccessRate) {
            $res['SendSuccessRate'] = $this->sendSuccessRate;
        }

        if (null !== $this->sendTotal) {
            $res['SendTotal'] = $this->sendTotal;
        }

        if (null !== $this->sendTotalFail) {
            $res['SendTotalFail'] = $this->sendTotalFail;
        }

        if (null !== $this->sendTotalSuccess) {
            $res['SendTotalSuccess'] = $this->sendTotalSuccess;
        }

        if (null !== $this->sendTotalUnknown) {
            $res['SendTotalUnknown'] = $this->sendTotalUnknown;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DetailStsDate'])) {
            $model->detailStsDate = $map['DetailStsDate'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SendSuccessRate'])) {
            $model->sendSuccessRate = $map['SendSuccessRate'];
        }

        if (isset($map['SendTotal'])) {
            $model->sendTotal = $map['SendTotal'];
        }

        if (isset($map['SendTotalFail'])) {
            $model->sendTotalFail = $map['SendTotalFail'];
        }

        if (isset($map['SendTotalSuccess'])) {
            $model->sendTotalSuccess = $map['SendTotalSuccess'];
        }

        if (isset($map['SendTotalUnknown'])) {
            $model->sendTotalUnknown = $map['SendTotalUnknown'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
