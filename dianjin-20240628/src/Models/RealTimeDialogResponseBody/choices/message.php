<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponseBody\choices;

use AlibabaCloud\Dara\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $analysisProcess;

    /**
     * @var string
     */
    public $callTime;

    /**
     * @var bool
     */
    public $hangUpDialog;

    /**
     * @var string
     */
    public $intentionCode;

    /**
     * @var string
     */
    public $intentionName;

    /**
     * @var string
     */
    public $intentionScript;

    /**
     * @var bool
     */
    public $interrupt;

    /**
     * @var string
     */
    public $recommendIntention;

    /**
     * @var string
     */
    public $recommendScript;

    /**
     * @var string
     */
    public $selfDirectedScript;

    /**
     * @var string
     */
    public $selfDirectedScriptFullContent;

    /**
     * @var bool
     */
    public $skipCurrentRecognize;
    protected $_name = [
        'analysisProcess' => 'analysisProcess',
        'callTime' => 'callTime',
        'hangUpDialog' => 'hangUpDialog',
        'intentionCode' => 'intentionCode',
        'intentionName' => 'intentionName',
        'intentionScript' => 'intentionScript',
        'interrupt' => 'interrupt',
        'recommendIntention' => 'recommendIntention',
        'recommendScript' => 'recommendScript',
        'selfDirectedScript' => 'selfDirectedScript',
        'selfDirectedScriptFullContent' => 'selfDirectedScriptFullContent',
        'skipCurrentRecognize' => 'skipCurrentRecognize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisProcess) {
            $res['analysisProcess'] = $this->analysisProcess;
        }

        if (null !== $this->callTime) {
            $res['callTime'] = $this->callTime;
        }

        if (null !== $this->hangUpDialog) {
            $res['hangUpDialog'] = $this->hangUpDialog;
        }

        if (null !== $this->intentionCode) {
            $res['intentionCode'] = $this->intentionCode;
        }

        if (null !== $this->intentionName) {
            $res['intentionName'] = $this->intentionName;
        }

        if (null !== $this->intentionScript) {
            $res['intentionScript'] = $this->intentionScript;
        }

        if (null !== $this->interrupt) {
            $res['interrupt'] = $this->interrupt;
        }

        if (null !== $this->recommendIntention) {
            $res['recommendIntention'] = $this->recommendIntention;
        }

        if (null !== $this->recommendScript) {
            $res['recommendScript'] = $this->recommendScript;
        }

        if (null !== $this->selfDirectedScript) {
            $res['selfDirectedScript'] = $this->selfDirectedScript;
        }

        if (null !== $this->selfDirectedScriptFullContent) {
            $res['selfDirectedScriptFullContent'] = $this->selfDirectedScriptFullContent;
        }

        if (null !== $this->skipCurrentRecognize) {
            $res['skipCurrentRecognize'] = $this->skipCurrentRecognize;
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
        if (isset($map['analysisProcess'])) {
            $model->analysisProcess = $map['analysisProcess'];
        }

        if (isset($map['callTime'])) {
            $model->callTime = $map['callTime'];
        }

        if (isset($map['hangUpDialog'])) {
            $model->hangUpDialog = $map['hangUpDialog'];
        }

        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }

        if (isset($map['intentionName'])) {
            $model->intentionName = $map['intentionName'];
        }

        if (isset($map['intentionScript'])) {
            $model->intentionScript = $map['intentionScript'];
        }

        if (isset($map['interrupt'])) {
            $model->interrupt = $map['interrupt'];
        }

        if (isset($map['recommendIntention'])) {
            $model->recommendIntention = $map['recommendIntention'];
        }

        if (isset($map['recommendScript'])) {
            $model->recommendScript = $map['recommendScript'];
        }

        if (isset($map['selfDirectedScript'])) {
            $model->selfDirectedScript = $map['selfDirectedScript'];
        }

        if (isset($map['selfDirectedScriptFullContent'])) {
            $model->selfDirectedScriptFullContent = $map['selfDirectedScriptFullContent'];
        }

        if (isset($map['skipCurrentRecognize'])) {
            $model->skipCurrentRecognize = $map['skipCurrentRecognize'];
        }

        return $model;
    }
}
