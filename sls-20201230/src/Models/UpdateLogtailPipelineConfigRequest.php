<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateLogtailPipelineConfigRequest extends Model
{
    /**
     * @var mixed[][]
     */
    public $aggregators;

    /**
     * @example test-config
     *
     * @var string
     */
    public $configName;

    /**
     * @var mixed[][]
     */
    public $flushers;

    /**
     * @var mixed[]
     */
    public $global;

    /**
     * @var mixed[][]
     */
    public $inputs;

    /**
     * @var string
     */
    public $logSample;

    /**
     * @var mixed[][]
     */
    public $processors;
    protected $_name = [
        'aggregators' => 'aggregators',
        'configName'  => 'configName',
        'flushers'    => 'flushers',
        'global'      => 'global',
        'inputs'      => 'inputs',
        'logSample'   => 'logSample',
        'processors'  => 'processors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregators) {
            $res['aggregators'] = $this->aggregators;
        }
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }
        if (null !== $this->flushers) {
            $res['flushers'] = $this->flushers;
        }
        if (null !== $this->global) {
            $res['global'] = $this->global;
        }
        if (null !== $this->inputs) {
            $res['inputs'] = $this->inputs;
        }
        if (null !== $this->logSample) {
            $res['logSample'] = $this->logSample;
        }
        if (null !== $this->processors) {
            $res['processors'] = $this->processors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLogtailPipelineConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aggregators'])) {
            if (!empty($map['aggregators'])) {
                $model->aggregators = $map['aggregators'];
            }
        }
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }
        if (isset($map['flushers'])) {
            if (!empty($map['flushers'])) {
                $model->flushers = $map['flushers'];
            }
        }
        if (isset($map['global'])) {
            $model->global = $map['global'];
        }
        if (isset($map['inputs'])) {
            if (!empty($map['inputs'])) {
                $model->inputs = $map['inputs'];
            }
        }
        if (isset($map['logSample'])) {
            $model->logSample = $map['logSample'];
        }
        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = $map['processors'];
            }
        }

        return $model;
    }
}
