<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig\outputDetail;
use AlibabaCloud\Tea\Model;

class LogtailConfig extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var mixed[]
     */
    public $inputDetail;

    /**
     * @var string
     */
    public $inputType;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $logSample;

    /**
     * @var outputDetail
     */
    public $outputDetail;

    /**
     * @var string
     */
    public $outputType;
    protected $_name = [
        'configName'     => 'configName',
        'createTime'     => 'createTime',
        'inputDetail'    => 'inputDetail',
        'inputType'      => 'inputType',
        'lastModifyTime' => 'lastModifyTime',
        'logSample'      => 'logSample',
        'outputDetail'   => 'outputDetail',
        'outputType'     => 'outputType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->inputDetail) {
            $res['inputDetail'] = $this->inputDetail;
        }
        if (null !== $this->inputType) {
            $res['inputType'] = $this->inputType;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->logSample) {
            $res['logSample'] = $this->logSample;
        }
        if (null !== $this->outputDetail) {
            $res['outputDetail'] = null !== $this->outputDetail ? $this->outputDetail->toMap() : null;
        }
        if (null !== $this->outputType) {
            $res['outputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogtailConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['inputDetail'])) {
            $model->inputDetail = $map['inputDetail'];
        }
        if (isset($map['inputType'])) {
            $model->inputType = $map['inputType'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['logSample'])) {
            $model->logSample = $map['logSample'];
        }
        if (isset($map['outputDetail'])) {
            $model->outputDetail = outputDetail::fromMap($map['outputDetail']);
        }
        if (isset($map['outputType'])) {
            $model->outputType = $map['outputType'];
        }

        return $model;
    }
}
