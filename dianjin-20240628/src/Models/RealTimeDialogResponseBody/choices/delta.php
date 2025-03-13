<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponseBody\choices;

use AlibabaCloud\Tea\Model;

class delta extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $analysisProcess;

    /**
     * @description time
     *
     * @example null
     *
     * @var string
     */
    public $callTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $hangUpDialog;

    /**
     * @example 1853360771162058752
     *
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
     * @example null
     *
     * @var string
     */
    public $recommendIntention;

    /**
     * @example null
     *
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
    ];

    public function validate(): void {}

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delta
     */
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

        return $model;
    }
}
