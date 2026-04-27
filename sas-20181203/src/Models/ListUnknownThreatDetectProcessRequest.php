<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListUnknownThreatDetectProcessRequest extends Model
{
    /**
     * @var string
     */
    public $analyzeResult;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $firstTimeEnd;

    /**
     * @var int
     */
    public $firstTimeStart;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $path;

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

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'analyzeResult' => 'AnalyzeResult',
        'currentPage' => 'CurrentPage',
        'firstTimeEnd' => 'FirstTimeEnd',
        'firstTimeStart' => 'FirstTimeStart',
        'md5' => 'Md5',
        'pageSize' => 'PageSize',
        'path' => 'Path',
        'processPath' => 'ProcessPath',
        'remark' => 'Remark',
        'sha256' => 'Sha256',
        'uuid' => 'Uuid',
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

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->firstTimeEnd) {
            $res['FirstTimeEnd'] = $this->firstTimeEnd;
        }

        if (null !== $this->firstTimeStart) {
            $res['FirstTimeStart'] = $this->firstTimeStart;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FirstTimeEnd'])) {
            $model->firstTimeEnd = $map['FirstTimeEnd'];
        }

        if (isset($map['FirstTimeStart'])) {
            $model->firstTimeStart = $map['FirstTimeStart'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
