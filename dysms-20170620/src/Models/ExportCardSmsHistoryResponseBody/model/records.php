<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsHistoryResponseBody\model;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $acceptDate;

    /**
     * @var int
     */
    public $apiSend;

    /**
     * @var string
     */
    public $cardTemplateType;

    /**
     * @var string
     */
    public $customTmpCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fuuId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isSupport;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $pid;

    /**
     * @var int
     */
    public $receiveState;

    /**
     * @var string
     */
    public $receiver;

    /**
     * @var int
     */
    public $renderDate;

    /**
     * @var int
     */
    public $renderState;

    /**
     * @var string
     */
    public $shortUrl;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var string
     */
    public $tmpId;

    /**
     * @var int
     */
    public $tmpType;

    /**
     * @var string
     */
    public $tmpTypeName;
    protected $_name = [
        'acceptDate' => 'AcceptDate',
        'apiSend' => 'ApiSend',
        'cardTemplateType' => 'CardTemplateType',
        'customTmpCode' => 'CustomTmpCode',
        'description' => 'Description',
        'fuuId' => 'FuuId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isSupport' => 'IsSupport',
        'outId' => 'OutId',
        'pid' => 'Pid',
        'receiveState' => 'ReceiveState',
        'receiver' => 'Receiver',
        'renderDate' => 'RenderDate',
        'renderState' => 'RenderState',
        'shortUrl' => 'ShortUrl',
        'signName' => 'SignName',
        'smsContent' => 'SmsContent',
        'suggestion' => 'Suggestion',
        'tmpCode' => 'TmpCode',
        'tmpId' => 'TmpId',
        'tmpType' => 'TmpType',
        'tmpTypeName' => 'TmpTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptDate) {
            $res['AcceptDate'] = $this->acceptDate;
        }

        if (null !== $this->apiSend) {
            $res['ApiSend'] = $this->apiSend;
        }

        if (null !== $this->cardTemplateType) {
            $res['CardTemplateType'] = $this->cardTemplateType;
        }

        if (null !== $this->customTmpCode) {
            $res['CustomTmpCode'] = $this->customTmpCode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fuuId) {
            $res['FuuId'] = $this->fuuId;
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

        if (null !== $this->isSupport) {
            $res['IsSupport'] = $this->isSupport;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->receiveState) {
            $res['ReceiveState'] = $this->receiveState;
        }

        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }

        if (null !== $this->renderDate) {
            $res['RenderDate'] = $this->renderDate;
        }

        if (null !== $this->renderState) {
            $res['RenderState'] = $this->renderState;
        }

        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->tmpId) {
            $res['TmpId'] = $this->tmpId;
        }

        if (null !== $this->tmpType) {
            $res['TmpType'] = $this->tmpType;
        }

        if (null !== $this->tmpTypeName) {
            $res['TmpTypeName'] = $this->tmpTypeName;
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
        if (isset($map['AcceptDate'])) {
            $model->acceptDate = $map['AcceptDate'];
        }

        if (isset($map['ApiSend'])) {
            $model->apiSend = $map['ApiSend'];
        }

        if (isset($map['CardTemplateType'])) {
            $model->cardTemplateType = $map['CardTemplateType'];
        }

        if (isset($map['CustomTmpCode'])) {
            $model->customTmpCode = $map['CustomTmpCode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FuuId'])) {
            $model->fuuId = $map['FuuId'];
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

        if (isset($map['IsSupport'])) {
            $model->isSupport = $map['IsSupport'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['ReceiveState'])) {
            $model->receiveState = $map['ReceiveState'];
        }

        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }

        if (isset($map['RenderDate'])) {
            $model->renderDate = $map['RenderDate'];
        }

        if (isset($map['RenderState'])) {
            $model->renderState = $map['RenderState'];
        }

        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['TmpId'])) {
            $model->tmpId = $map['TmpId'];
        }

        if (isset($map['TmpType'])) {
            $model->tmpType = $map['TmpType'];
        }

        if (isset($map['TmpTypeName'])) {
            $model->tmpTypeName = $map['TmpTypeName'];
        }

        return $model;
    }
}
