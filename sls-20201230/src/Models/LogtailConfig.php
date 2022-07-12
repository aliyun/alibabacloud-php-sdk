<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig\outputDetail;
use AlibabaCloud\Tea\Model;

class LogtailConfig extends Model
{
    /**
     * @description logtail 配置的名称。
     *
     * @var string
     */
    public $configName;

    /**
     * @description 创建时间，unix 时间戳。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description logtail 输入的详细配置。
     *
     * @var mixed[]
     */
    public $inputDetail;

    /**
     * @description logtail 读取日志的输入类型。
     *
     * @var string
     */
    public $inputType;

    /**
     * @description 最后一次修改时间，unix 时间戳。
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description 日志样例，可以用于自动生成正则捕获字段。
     *
     * @var string
     */
    public $logSample;

    /**
     * @description logtail 输出的详细配置。
     *
     * @var outputDetail
     */
    public $outputDetail;

    /**
     * @description logtail 输出的目标类型。这里固定选择 LogService。
     *
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
