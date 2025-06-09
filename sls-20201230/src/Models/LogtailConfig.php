<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\LogtailConfig\outputDetail;

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
        'configName' => 'configName',
        'createTime' => 'createTime',
        'inputDetail' => 'inputDetail',
        'inputType' => 'inputType',
        'lastModifyTime' => 'lastModifyTime',
        'logSample' => 'logSample',
        'outputDetail' => 'outputDetail',
        'outputType' => 'outputType',
    ];

    public function validate()
    {
        if (\is_array($this->inputDetail)) {
            Model::validateArray($this->inputDetail);
        }
        if (null !== $this->outputDetail) {
            $this->outputDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->inputDetail) {
            if (\is_array($this->inputDetail)) {
                $res['inputDetail'] = [];
                foreach ($this->inputDetail as $key1 => $value1) {
                    $res['inputDetail'][$key1] = $value1;
                }
            }
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
            $res['outputDetail'] = null !== $this->outputDetail ? $this->outputDetail->toArray($noStream) : $this->outputDetail;
        }

        if (null !== $this->outputType) {
            $res['outputType'] = $this->outputType;
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
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['inputDetail'])) {
            if (!empty($map['inputDetail'])) {
                $model->inputDetail = [];
                foreach ($map['inputDetail'] as $key1 => $value1) {
                    $model->inputDetail[$key1] = $value1;
                }
            }
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
