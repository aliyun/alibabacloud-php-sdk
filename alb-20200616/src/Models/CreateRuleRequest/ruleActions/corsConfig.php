<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions;

use AlibabaCloud\Dara\Model;

class corsConfig extends Model
{
    /**
     * @var string
     */
    public $allowCredentials;
    /**
     * @var string[]
     */
    public $allowHeaders;
    /**
     * @var string[]
     */
    public $allowMethods;
    /**
     * @var string[]
     */
    public $allowOrigin;
    /**
     * @var string[]
     */
    public $exposeHeaders;
    /**
     * @var int
     */
    public $maxAge;
    protected $_name = [
        'allowCredentials' => 'AllowCredentials',
        'allowHeaders'     => 'AllowHeaders',
        'allowMethods'     => 'AllowMethods',
        'allowOrigin'      => 'AllowOrigin',
        'exposeHeaders'    => 'ExposeHeaders',
        'maxAge'           => 'MaxAge',
    ];

    public function validate()
    {
        if (\is_array($this->allowHeaders)) {
            Model::validateArray($this->allowHeaders);
        }
        if (\is_array($this->allowMethods)) {
            Model::validateArray($this->allowMethods);
        }
        if (\is_array($this->allowOrigin)) {
            Model::validateArray($this->allowOrigin);
        }
        if (\is_array($this->exposeHeaders)) {
            Model::validateArray($this->exposeHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCredentials) {
            $res['AllowCredentials'] = $this->allowCredentials;
        }

        if (null !== $this->allowHeaders) {
            if (\is_array($this->allowHeaders)) {
                $res['AllowHeaders'] = [];
                $n1                  = 0;
                foreach ($this->allowHeaders as $item1) {
                    $res['AllowHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowMethods) {
            if (\is_array($this->allowMethods)) {
                $res['AllowMethods'] = [];
                $n1                  = 0;
                foreach ($this->allowMethods as $item1) {
                    $res['AllowMethods'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowOrigin) {
            if (\is_array($this->allowOrigin)) {
                $res['AllowOrigin'] = [];
                $n1                 = 0;
                foreach ($this->allowOrigin as $item1) {
                    $res['AllowOrigin'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->exposeHeaders) {
            if (\is_array($this->exposeHeaders)) {
                $res['ExposeHeaders'] = [];
                $n1                   = 0;
                foreach ($this->exposeHeaders as $item1) {
                    $res['ExposeHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
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
        if (isset($map['AllowCredentials'])) {
            $model->allowCredentials = $map['AllowCredentials'];
        }

        if (isset($map['AllowHeaders'])) {
            if (!empty($map['AllowHeaders'])) {
                $model->allowHeaders = [];
                $n1                  = 0;
                foreach ($map['AllowHeaders'] as $item1) {
                    $model->allowHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AllowMethods'])) {
            if (!empty($map['AllowMethods'])) {
                $model->allowMethods = [];
                $n1                  = 0;
                foreach ($map['AllowMethods'] as $item1) {
                    $model->allowMethods[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AllowOrigin'])) {
            if (!empty($map['AllowOrigin'])) {
                $model->allowOrigin = [];
                $n1                 = 0;
                foreach ($map['AllowOrigin'] as $item1) {
                    $model->allowOrigin[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExposeHeaders'])) {
            if (!empty($map['ExposeHeaders'])) {
                $model->exposeHeaders = [];
                $n1                   = 0;
                foreach ($map['ExposeHeaders'] as $item1) {
                    $model->exposeHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }

        return $model;
    }
}
