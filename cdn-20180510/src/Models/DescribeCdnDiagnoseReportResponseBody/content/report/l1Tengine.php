<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody\content\report;

use AlibabaCloud\Dara\Model;

class l1Tengine extends Model
{
    /**
     * @var string
     */
    public $addr;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorLog;

    /**
     * @var string
     */
    public $fbt;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $reqHeader;

    /**
     * @var string
     */
    public $reqTime;

    /**
     * @var string
     */
    public $respHeader;

    /**
     * @var int
     */
    public $respSize;

    /**
     * @var string
     */
    public $rt;

    /**
     * @var string
     */
    public $station;
    protected $_name = [
        'addr' => 'Addr',
        'code' => 'Code',
        'errorLog' => 'ErrorLog',
        'fbt' => 'Fbt',
        'intro' => 'Intro',
        'reqHeader' => 'ReqHeader',
        'reqTime' => 'ReqTime',
        'respHeader' => 'RespHeader',
        'respSize' => 'RespSize',
        'rt' => 'Rt',
        'station' => 'Station',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->errorLog) {
            $res['ErrorLog'] = $this->errorLog;
        }

        if (null !== $this->fbt) {
            $res['Fbt'] = $this->fbt;
        }

        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }

        if (null !== $this->reqHeader) {
            $res['ReqHeader'] = $this->reqHeader;
        }

        if (null !== $this->reqTime) {
            $res['ReqTime'] = $this->reqTime;
        }

        if (null !== $this->respHeader) {
            $res['RespHeader'] = $this->respHeader;
        }

        if (null !== $this->respSize) {
            $res['RespSize'] = $this->respSize;
        }

        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }

        if (null !== $this->station) {
            $res['Station'] = $this->station;
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
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ErrorLog'])) {
            $model->errorLog = $map['ErrorLog'];
        }

        if (isset($map['Fbt'])) {
            $model->fbt = $map['Fbt'];
        }

        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }

        if (isset($map['ReqHeader'])) {
            $model->reqHeader = $map['ReqHeader'];
        }

        if (isset($map['ReqTime'])) {
            $model->reqTime = $map['ReqTime'];
        }

        if (isset($map['RespHeader'])) {
            $model->respHeader = $map['RespHeader'];
        }

        if (isset($map['RespSize'])) {
            $model->respSize = $map['RespSize'];
        }

        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }

        if (isset($map['Station'])) {
            $model->station = $map['Station'];
        }

        return $model;
    }
}
