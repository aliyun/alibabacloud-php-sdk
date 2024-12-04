<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateLogtailPipelineConfigRequest extends Model
{
    /**
     * @description The aggregation plug-ins.
     *
     * >  This parameter takes effect only when extended plug-ins are used. You can use only one aggregation plug-in.
     * @var mixed[][]
     */
    public $aggregators;

    /**
     * @description The name of the configuration.
     *
     * This parameter is required.
     * @example test-config
     *
     * @var string
     */
    public $configName;

    /**
     * @description The output plug-ins.
     *
     * This parameter is required.
     * @var mixed[][]
     */
    public $flushers;

    /**
     * @description The global settings.
     *
     ****
     * @var mixed[]
     */
    public $global;

    /**
     * @description The input plug-ins.
     *
     * This parameter is required.
     * @var mixed[][]
     */
    public $inputs;

    /**
     * @description The sample log. You can specify multiple sample logs.
     *
     * @example 2022-06-14 11:13:29.796 | DEBUG    | __main__:<module>:1 - hello world
     *
     * @var string
     */
    public $logSample;

    /**
     * @description The processing plug-ins.
     *
     * >
     *
     *   You can use native plug-ins only to collect text logs.
     *
     *   You cannot add native plug-ins and extended plug-ins at the same time.
     *
     *   When you add native plug-ins, take note of the following items:
     *
     *   You must add one of the following Logtail plug-ins for data processing as the first plug-in: Data Parsing (Regex Mode), Data Parsing (Delimiter Mode), Data Parsing (JSON Mode), Data Parsing (NGINX Mode), Data Parsing (Apache Mode), and Data Parsing (IIS Mode).
     *   After you add the first plug-in, you can add one Time Parsing plug-in, one Data Filtering plug-in, and multiple Data Masking plug-ins.
     *
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
