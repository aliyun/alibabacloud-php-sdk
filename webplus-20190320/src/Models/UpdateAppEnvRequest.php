<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppEnvRequest extends Model
{
    /**
     * @var string
     */
    public $envDescription;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $pkgVersionId;

    /**
     * @var string
     */
    public $optionSettings;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $extraProperties;

    /**
     * @var string
     */
    public $batchSize;

    /**
     * @var string
     */
    public $batchPercent;

    /**
     * @var string
     */
    public $batchInterval;

    /**
     * @var bool
     */
    public $pauseBetweenBatches;
    protected $_name = [
        'envDescription'      => 'EnvDescription',
        'envId'               => 'EnvId',
        'pkgVersionId'        => 'PkgVersionId',
        'optionSettings'      => 'OptionSettings',
        'stackId'             => 'StackId',
        'dryRun'              => 'DryRun',
        'extraProperties'     => 'ExtraProperties',
        'batchSize'           => 'BatchSize',
        'batchPercent'        => 'BatchPercent',
        'batchInterval'       => 'BatchInterval',
        'pauseBetweenBatches' => 'PauseBetweenBatches',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envDescription) {
            $res['EnvDescription'] = $this->envDescription;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->pkgVersionId) {
            $res['PkgVersionId'] = $this->pkgVersionId;
        }
        if (null !== $this->optionSettings) {
            $res['OptionSettings'] = $this->optionSettings;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->extraProperties) {
            $res['ExtraProperties'] = $this->extraProperties;
        }
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->batchPercent) {
            $res['BatchPercent'] = $this->batchPercent;
        }
        if (null !== $this->batchInterval) {
            $res['BatchInterval'] = $this->batchInterval;
        }
        if (null !== $this->pauseBetweenBatches) {
            $res['PauseBetweenBatches'] = $this->pauseBetweenBatches;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppEnvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvDescription'])) {
            $model->envDescription = $map['EnvDescription'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['PkgVersionId'])) {
            $model->pkgVersionId = $map['PkgVersionId'];
        }
        if (isset($map['OptionSettings'])) {
            $model->optionSettings = $map['OptionSettings'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ExtraProperties'])) {
            $model->extraProperties = $map['ExtraProperties'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['BatchPercent'])) {
            $model->batchPercent = $map['BatchPercent'];
        }
        if (isset($map['BatchInterval'])) {
            $model->batchInterval = $map['BatchInterval'];
        }
        if (isset($map['PauseBetweenBatches'])) {
            $model->pauseBetweenBatches = $map['PauseBetweenBatches'];
        }

        return $model;
    }
}
