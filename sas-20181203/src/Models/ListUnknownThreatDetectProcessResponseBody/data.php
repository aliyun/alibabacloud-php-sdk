<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnknownThreatDetectProcessResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $analyzeResult;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processPath;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sha256;
    protected $_name = [
        'analyzeResult' => 'AnalyzeResult',
        'firstTime' => 'FirstTime',
        'md5' => 'Md5',
        'processId' => 'ProcessId',
        'processPath' => 'ProcessPath',
        'remark' => 'Remark',
        'sha256' => 'Sha256',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analyzeResult) {
            $res['AnalyzeResult'] = $this->analyzeResult;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sha256) {
            $res['Sha256'] = $this->sha256;
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
        if (isset($map['AnalyzeResult'])) {
            $model->analyzeResult = $map['AnalyzeResult'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['ProcessPath'])) {
            $model->processPath = $map['ProcessPath'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Sha256'])) {
            $model->sha256 = $map['Sha256'];
        }

        return $model;
    }
}
