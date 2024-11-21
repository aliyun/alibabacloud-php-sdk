<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody;

use AlibabaCloud\Tea\Model;

class envs extends Model
{
    /**
     * @description The regions for canary release.
     *
     * @var string[]
     */
    public $canaryAreaList;

    /**
     * @description The version number for canary release.
     *
     * @example 1710120201067577628
     *
     * @var string
     */
    public $canaryCodeVersion;

    /**
     * @description The version number of the code in the environment.
     *
     * @example 1710120201067577628
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @description The environment type.
     *
     * @example production
     *
     * @var string
     */
    public $env;

    /**
     * @description The specification.
     *
     * @example 5ms
     *
     * @var string
     */
    public $specName;
    protected $_name = [
        'canaryAreaList'    => 'CanaryAreaList',
        'canaryCodeVersion' => 'CanaryCodeVersion',
        'codeVersion'       => 'CodeVersion',
        'env'               => 'Env',
        'specName'          => 'SpecName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canaryAreaList) {
            $res['CanaryAreaList'] = $this->canaryAreaList;
        }
        if (null !== $this->canaryCodeVersion) {
            $res['CanaryCodeVersion'] = $this->canaryCodeVersion;
        }
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanaryAreaList'])) {
            if (!empty($map['CanaryAreaList'])) {
                $model->canaryAreaList = $map['CanaryAreaList'];
            }
        }
        if (isset($map['CanaryCodeVersion'])) {
            $model->canaryCodeVersion = $map['CanaryCodeVersion'];
        }
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
