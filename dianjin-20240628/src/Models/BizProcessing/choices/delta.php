<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\BizProcessing\choices;

use AlibabaCloud\Dara\Model;

class delta extends Model
{
    /**
     * @var string
     */
    public $recommendIntention;

    /**
     * @var string
     */
    public $selfDirectedScriptFullContent;

    /**
     * @var bool
     */
    public $hangUpDialog;

    /**
     * @var string
     */
    public $selfDirectedScript;

    /**
     * @var string
     */
    public $analysisProcess;

    /**
     * @var bool
     */
    public $interrupt;

    /**
     * @var string
     */
    public $intentionCode;

    /**
     * @var string
     */
    public $callTime;

    /**
     * @var string
     */
    public $intentionScript;

    /**
     * @var string
     */
    public $intentionName;

    /**
     * @var string
     */
    public $recommendScript;
    protected $_name = [
        'recommendIntention' => 'recommendIntention',
        'selfDirectedScriptFullContent' => 'selfDirectedScriptFullContent',
        'hangUpDialog' => 'hangUpDialog',
        'selfDirectedScript' => 'selfDirectedScript',
        'analysisProcess' => 'analysisProcess',
        'interrupt' => 'interrupt',
        'intentionCode' => 'intentionCode',
        'callTime' => 'callTime',
        'intentionScript' => 'intentionScript',
        'intentionName' => 'intentionName',
        'recommendScript' => 'recommendScript',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendIntention) {
            $res['recommendIntention'] = $this->recommendIntention;
        }

        if (null !== $this->selfDirectedScriptFullContent) {
            $res['selfDirectedScriptFullContent'] = $this->selfDirectedScriptFullContent;
        }

        if (null !== $this->hangUpDialog) {
            $res['hangUpDialog'] = $this->hangUpDialog;
        }

        if (null !== $this->selfDirectedScript) {
            $res['selfDirectedScript'] = $this->selfDirectedScript;
        }

        if (null !== $this->analysisProcess) {
            $res['analysisProcess'] = $this->analysisProcess;
        }

        if (null !== $this->interrupt) {
            $res['interrupt'] = $this->interrupt;
        }

        if (null !== $this->intentionCode) {
            $res['intentionCode'] = $this->intentionCode;
        }

        if (null !== $this->callTime) {
            $res['callTime'] = $this->callTime;
        }

        if (null !== $this->intentionScript) {
            $res['intentionScript'] = $this->intentionScript;
        }

        if (null !== $this->intentionName) {
            $res['intentionName'] = $this->intentionName;
        }

        if (null !== $this->recommendScript) {
            $res['recommendScript'] = $this->recommendScript;
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
        if (isset($map['recommendIntention'])) {
            $model->recommendIntention = $map['recommendIntention'];
        }

        if (isset($map['selfDirectedScriptFullContent'])) {
            $model->selfDirectedScriptFullContent = $map['selfDirectedScriptFullContent'];
        }

        if (isset($map['hangUpDialog'])) {
            $model->hangUpDialog = $map['hangUpDialog'];
        }

        if (isset($map['selfDirectedScript'])) {
            $model->selfDirectedScript = $map['selfDirectedScript'];
        }

        if (isset($map['analysisProcess'])) {
            $model->analysisProcess = $map['analysisProcess'];
        }

        if (isset($map['interrupt'])) {
            $model->interrupt = $map['interrupt'];
        }

        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }

        if (isset($map['callTime'])) {
            $model->callTime = $map['callTime'];
        }

        if (isset($map['intentionScript'])) {
            $model->intentionScript = $map['intentionScript'];
        }

        if (isset($map['intentionName'])) {
            $model->intentionName = $map['intentionName'];
        }

        if (isset($map['recommendScript'])) {
            $model->recommendScript = $map['recommendScript'];
        }

        return $model;
    }
}
