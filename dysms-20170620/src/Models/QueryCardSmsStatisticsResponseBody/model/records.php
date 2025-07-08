<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsResponseBody\model;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $renderSuccessTotal;

    /**
     * @var string
     */
    public $sendDate;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $tmpCode;

    /**
     * @var string
     */
    public $tmpName;

    /**
     * @var int
     */
    public $urlGenerateTotal;
    protected $_name = [
        'renderSuccessTotal' => 'RenderSuccessTotal',
        'sendDate' => 'SendDate',
        'signName' => 'SignName',
        'tmpCode' => 'TmpCode',
        'tmpName' => 'TmpName',
        'urlGenerateTotal' => 'UrlGenerateTotal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderSuccessTotal) {
            $res['RenderSuccessTotal'] = $this->renderSuccessTotal;
        }

        if (null !== $this->sendDate) {
            $res['SendDate'] = $this->sendDate;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->tmpCode) {
            $res['TmpCode'] = $this->tmpCode;
        }

        if (null !== $this->tmpName) {
            $res['TmpName'] = $this->tmpName;
        }

        if (null !== $this->urlGenerateTotal) {
            $res['UrlGenerateTotal'] = $this->urlGenerateTotal;
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
        if (isset($map['RenderSuccessTotal'])) {
            $model->renderSuccessTotal = $map['RenderSuccessTotal'];
        }

        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['TmpCode'])) {
            $model->tmpCode = $map['TmpCode'];
        }

        if (isset($map['TmpName'])) {
            $model->tmpName = $map['TmpName'];
        }

        if (isset($map['UrlGenerateTotal'])) {
            $model->urlGenerateTotal = $map['UrlGenerateTotal'];
        }

        return $model;
    }
}
