<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployModelScopeModelInput\httpTrigger;

use AlibabaCloud\Dara\Model;

class triggerConfig extends Model
{
    /**
     * @var string
     */
    public $authConfig;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $disableURLInternet;

    /**
     * @var bool
     */
    public $dsableURLInternet;

    /**
     * @var string[]
     */
    public $methods;
    protected $_name = [
        'authConfig' => 'authConfig',
        'authType' => 'authType',
        'disableURLInternet' => 'disableURLInternet',
        'dsableURLInternet' => 'dsableURLInternet',
        'methods' => 'methods',
    ];

    public function validate()
    {
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = $this->authConfig;
        }

        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->disableURLInternet) {
            $res['disableURLInternet'] = $this->disableURLInternet;
        }

        if (null !== $this->dsableURLInternet) {
            $res['dsableURLInternet'] = $this->dsableURLInternet;
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['authConfig'])) {
            $model->authConfig = $map['authConfig'];
        }

        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['disableURLInternet'])) {
            $model->disableURLInternet = $map['disableURLInternet'];
        }

        if (isset($map['dsableURLInternet'])) {
            $model->dsableURLInternet = $map['dsableURLInternet'];
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
