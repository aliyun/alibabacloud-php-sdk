<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\taskExecutor\VM\environmentVars;

class VM extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var environmentVars[]
     */
    public $environmentVars;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $prologScript;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'appId' => 'AppId',
        'environmentVars' => 'EnvironmentVars',
        'image' => 'Image',
        'password' => 'Password',
        'prologScript' => 'PrologScript',
        'script' => 'Script',
    ];

    public function validate()
    {
        if (\is_array($this->environmentVars)) {
            Model::validateArray($this->environmentVars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->environmentVars) {
            if (\is_array($this->environmentVars)) {
                $res['EnvironmentVars'] = [];
                $n1 = 0;
                foreach ($this->environmentVars as $item1) {
                    $res['EnvironmentVars'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->prologScript) {
            $res['PrologScript'] = $this->prologScript;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n1 = 0;
                foreach ($map['EnvironmentVars'] as $item1) {
                    $model->environmentVars[$n1] = environmentVars::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PrologScript'])) {
            $model->prologScript = $map['PrologScript'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
