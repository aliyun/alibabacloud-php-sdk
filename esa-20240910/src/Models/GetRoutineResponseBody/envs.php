<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs\codeDeploy;

class envs extends Model
{
    /**
     * @var string[]
     */
    public $canaryAreaList;

    /**
     * @var string
     */
    public $canaryCodeVersion;

    /**
     * @var codeDeploy
     */
    public $codeDeploy;

    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var string
     */
    public $env;
    protected $_name = [
        'canaryAreaList' => 'CanaryAreaList',
        'canaryCodeVersion' => 'CanaryCodeVersion',
        'codeDeploy' => 'CodeDeploy',
        'codeVersion' => 'CodeVersion',
        'env' => 'Env',
    ];

    public function validate()
    {
        if (\is_array($this->canaryAreaList)) {
            Model::validateArray($this->canaryAreaList);
        }
        if (null !== $this->codeDeploy) {
            $this->codeDeploy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canaryAreaList) {
            if (\is_array($this->canaryAreaList)) {
                $res['CanaryAreaList'] = [];
                $n1 = 0;
                foreach ($this->canaryAreaList as $item1) {
                    $res['CanaryAreaList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->canaryCodeVersion) {
            $res['CanaryCodeVersion'] = $this->canaryCodeVersion;
        }

        if (null !== $this->codeDeploy) {
            $res['CodeDeploy'] = null !== $this->codeDeploy ? $this->codeDeploy->toArray($noStream) : $this->codeDeploy;
        }

        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
        if (isset($map['CanaryAreaList'])) {
            if (!empty($map['CanaryAreaList'])) {
                $model->canaryAreaList = [];
                $n1 = 0;
                foreach ($map['CanaryAreaList'] as $item1) {
                    $model->canaryAreaList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CanaryCodeVersion'])) {
            $model->canaryCodeVersion = $map['CanaryCodeVersion'];
        }

        if (isset($map['CodeDeploy'])) {
            $model->codeDeploy = codeDeploy::fromMap($map['CodeDeploy']);
        }

        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        return $model;
    }
}
