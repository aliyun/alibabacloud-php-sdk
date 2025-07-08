<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsSendResponseBody\model;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $customTmpCode;

    /**
     * @var float
     */
    public $renderSuccessRate;

    /**
     * @var int
     */
    public $renderSuccessTotal;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var int
     */
    public $sendFailTotal;

    /**
     * @var int
     */
    public $sendProcessTotal;

    /**
     * @var float
     */
    public $sendSuccessRate;

    /**
     * @var int
     */
    public $sendSuccessTotal;

    /**
     * @var int
     */
    public $sendTotal;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var float
     */
    public $supportRate;

    /**
     * @var int
     */
    public $supportTotal;

    /**
     * @var string
     */
    public $tmpCode;
    protected $_name = [
        'customTmpCode' => 'CustomTmpCode',
        'renderSuccessRate' => 'RenderSuccessRate',
        'renderSuccessTotal' => 'RenderSuccessTotal',
        'sendDate' => 'SendDate',
        'sendFailTotal' => 'SendFailTotal',
        'sendProcessTotal' => 'SendProcessTotal',
        'sendSuccessRate' => 'SendSuccessRate',
        'sendSuccessTotal' => 'SendSuccessTotal',
        'sendTotal' => 'SendTotal',
        'signName' => 'SignName',
        'supportRate' => 'SupportRate',
        'supportTotal' => 'SupportTotal',
        'tmpCode' => 'TmpCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTmpCode) {
            $res['CustomTmpCode'] = $this->customTmpCode;
        }

        if (null !== $this->renderSuccessRate) {
            $res['RenderSuccessRate'] = $this->renderSuccessRate;
        }

        if (null !== $this->renderSuccessTotal) {
            $res['RenderSuccessTotal'] = $this->renderSuccessTotal;
        }

        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }

        if (null !== $this->sendFailTotal) {
            $res['SendFailTotal'] = $this->sendFailTotal;
        }

        if (null !== $this->sendProcessTotal) {
            $res['SendProcessTotal'] = $this->sendProcessTotal;
        }

        if (null !== $this->sendSuccessRate) {
            $res['SendSuccessRate'] = $this->sendSuccessRate;
        }

        if (null !== $this->sendSuccessTotal) {
            $res['SendSuccessTotal'] = $this->sendSuccessTotal;
        }

        if (null !== $this->sendTotal) {
            $res['SendTotal'] = $this->sendTotal;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->supportRate) {
            $res['SupportRate'] = $this->supportRate;
        }

        if (null !== $this->supportTotal) {
            $res['SupportTotal'] = $this->supportTotal;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
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
        if (isset($map['CustomTmpCode'])) {
            $model->customTmpCode = $map['CustomTmpCode'];
        }

        if (isset($map['RenderSuccessRate'])) {
            $model->renderSuccessRate = $map['RenderSuccessRate'];
        }

        if (isset($map['RenderSuccessTotal'])) {
            $model->renderSuccessTotal = $map['RenderSuccessTotal'];
        }

        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }

        if (isset($map['SendFailTotal'])) {
            $model->sendFailTotal = $map['SendFailTotal'];
        }

        if (isset($map['SendProcessTotal'])) {
            $model->sendProcessTotal = $map['SendProcessTotal'];
        }

        if (isset($map['SendSuccessRate'])) {
            $model->sendSuccessRate = $map['SendSuccessRate'];
        }

        if (isset($map['SendSuccessTotal'])) {
            $model->sendSuccessTotal = $map['SendSuccessTotal'];
        }

        if (isset($map['SendTotal'])) {
            $model->sendTotal = $map['SendTotal'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SupportRate'])) {
            $model->supportRate = $map['SupportRate'];
        }

        if (isset($map['SupportTotal'])) {
            $model->supportTotal = $map['SupportTotal'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        return $model;
    }
}
