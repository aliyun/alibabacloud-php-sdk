<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployOllamaModelInput\httpTrigger;

use AlibabaCloud\Dara\Model;

class triggerConfig extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $dsableURLInternet;

    /**
     * @var string[]
     */
    public $methods;
    protected $_name = [
        'authType' => 'authType',
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
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->dsableURLInternet) {
            $res['dsableURLInternet'] = $this->dsableURLInternet;
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['methods'][$n1++] = $item1;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['dsableURLInternet'])) {
            $model->dsableURLInternet = $map['dsableURLInternet'];
        }

        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['methods'] as $item1) {
                    $model->methods[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
