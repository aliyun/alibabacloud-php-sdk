<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CORSConfig extends Model
{
    /**
     * @var bool
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
    public $allowOrigins;

    /**
     * @var string[]
     */
    public $exposeHeaders;

    /**
     * @var int
     */
    public $maxAge;
    protected $_name = [
        'allowCredentials' => 'allowCredentials',
        'allowHeaders' => 'allowHeaders',
        'allowMethods' => 'allowMethods',
        'allowOrigins' => 'allowOrigins',
        'exposeHeaders' => 'exposeHeaders',
        'maxAge' => 'maxAge',
    ];

    public function validate()
    {
        if (\is_array($this->allowHeaders)) {
            Model::validateArray($this->allowHeaders);
        }
        if (\is_array($this->allowMethods)) {
            Model::validateArray($this->allowMethods);
        }
        if (\is_array($this->allowOrigins)) {
            Model::validateArray($this->allowOrigins);
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
            $res['allowCredentials'] = $this->allowCredentials;
        }

        if (null !== $this->allowHeaders) {
            if (\is_array($this->allowHeaders)) {
                $res['allowHeaders'] = [];
                $n1 = 0;
                foreach ($this->allowHeaders as $item1) {
                    $res['allowHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowMethods) {
            if (\is_array($this->allowMethods)) {
                $res['allowMethods'] = [];
                $n1 = 0;
                foreach ($this->allowMethods as $item1) {
                    $res['allowMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowOrigins) {
            if (\is_array($this->allowOrigins)) {
                $res['allowOrigins'] = [];
                $n1 = 0;
                foreach ($this->allowOrigins as $item1) {
                    $res['allowOrigins'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exposeHeaders) {
            if (\is_array($this->exposeHeaders)) {
                $res['exposeHeaders'] = [];
                $n1 = 0;
                foreach ($this->exposeHeaders as $item1) {
                    $res['exposeHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxAge) {
            $res['maxAge'] = $this->maxAge;
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
        if (isset($map['allowCredentials'])) {
            $model->allowCredentials = $map['allowCredentials'];
        }

        if (isset($map['allowHeaders'])) {
            if (!empty($map['allowHeaders'])) {
                $model->allowHeaders = [];
                $n1 = 0;
                foreach ($map['allowHeaders'] as $item1) {
                    $model->allowHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowMethods'])) {
            if (!empty($map['allowMethods'])) {
                $model->allowMethods = [];
                $n1 = 0;
                foreach ($map['allowMethods'] as $item1) {
                    $model->allowMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowOrigins'])) {
            if (!empty($map['allowOrigins'])) {
                $model->allowOrigins = [];
                $n1 = 0;
                foreach ($map['allowOrigins'] as $item1) {
                    $model->allowOrigins[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['exposeHeaders'])) {
            if (!empty($map['exposeHeaders'])) {
                $model->exposeHeaders = [];
                $n1 = 0;
                foreach ($map['exposeHeaders'] as $item1) {
                    $model->exposeHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['maxAge'])) {
            $model->maxAge = $map['maxAge'];
        }

        return $model;
    }
}
