<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ExecuteSqlInstanceRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $combineParam;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var mixed[]
     */
    public $dynamicParam;

    /**
     * @var mixed[]
     */
    public $kvpair;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var mixed[]
     */
    public $staticParam;
    protected $_name = [
        'combineParam' => 'combineParam',
        'content' => 'content',
        'domain' => 'domain',
        'dynamicParam' => 'dynamicParam',
        'kvpair' => 'kvpair',
        'params' => 'params',
        'staticParam' => 'staticParam',
    ];

    public function validate()
    {
        if (\is_array($this->combineParam)) {
            Model::validateArray($this->combineParam);
        }
        if (\is_array($this->dynamicParam)) {
            Model::validateArray($this->dynamicParam);
        }
        if (\is_array($this->kvpair)) {
            Model::validateArray($this->kvpair);
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        if (\is_array($this->staticParam)) {
            Model::validateArray($this->staticParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->combineParam) {
            if (\is_array($this->combineParam)) {
                $res['combineParam'] = [];
                foreach ($this->combineParam as $key1 => $value1) {
                    $res['combineParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->dynamicParam) {
            if (\is_array($this->dynamicParam)) {
                $res['dynamicParam'] = [];
                foreach ($this->dynamicParam as $key1 => $value1) {
                    $res['dynamicParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->kvpair) {
            if (\is_array($this->kvpair)) {
                $res['kvpair'] = [];
                foreach ($this->kvpair as $key1 => $value1) {
                    $res['kvpair'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->staticParam) {
            if (\is_array($this->staticParam)) {
                $res['staticParam'] = [];
                foreach ($this->staticParam as $key1 => $value1) {
                    $res['staticParam'][$key1] = $value1;
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
        if (isset($map['combineParam'])) {
            if (!empty($map['combineParam'])) {
                $model->combineParam = [];
                foreach ($map['combineParam'] as $key1 => $value1) {
                    $model->combineParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['dynamicParam'])) {
            if (!empty($map['dynamicParam'])) {
                $model->dynamicParam = [];
                foreach ($map['dynamicParam'] as $key1 => $value1) {
                    $model->dynamicParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['kvpair'])) {
            if (!empty($map['kvpair'])) {
                $model->kvpair = [];
                foreach ($map['kvpair'] as $key1 => $value1) {
                    $model->kvpair[$key1] = $value1;
                }
            }
        }

        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                foreach ($map['params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['staticParam'])) {
            if (!empty($map['staticParam'])) {
                $model->staticParam = [];
                foreach ($map['staticParam'] as $key1 => $value1) {
                    $model->staticParam[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
