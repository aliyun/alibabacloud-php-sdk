<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryCardSmsHistoryRequest extends Model
{
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
    public $gmtCreate;

    /**
     * @var int
     */
    public $maxId;

    /**
     * @var int
     */
    public $minId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

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
    public $renderState;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'apiSend' => 'ApiSend',
        'cardTemplateType' => 'CardTemplateType',
        'gmtCreate' => 'GmtCreate',
        'maxId' => 'MaxId',
        'minId' => 'MinId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'receiveState' => 'ReceiveState',
        'receiver' => 'Receiver',
        'renderState' => 'RenderState',
        'signName' => 'SignName',
        'tmpCode' => 'TmpCode',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSend) {
            $res['ApiSend'] = $this->apiSend;
        }

        if (null !== $this->cardTemplateType) {
            $res['CardTemplateType'] = $this->cardTemplateType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->maxId) {
            $res['MaxId'] = $this->maxId;
        }

        if (null !== $this->minId) {
            $res['MinId'] = $this->minId;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->receiveState) {
            $res['ReceiveState'] = $this->receiveState;
        }

        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }

        if (null !== $this->renderState) {
            $res['RenderState'] = $this->renderState;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ApiSend'])) {
            $model->apiSend = $map['ApiSend'];
        }

        if (isset($map['CardTemplateType'])) {
            $model->cardTemplateType = $map['CardTemplateType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['MaxId'])) {
            $model->maxId = $map['MaxId'];
        }

        if (isset($map['MinId'])) {
            $model->minId = $map['MinId'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ReceiveState'])) {
            $model->receiveState = $map['ReceiveState'];
        }

        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }

        if (isset($map['RenderState'])) {
            $model->renderState = $map['RenderState'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
