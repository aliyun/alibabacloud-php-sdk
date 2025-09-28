<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\entityFilter\filters;

class entityFilter extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domain' => 'domain',
        'filters' => 'filters',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['filters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['filters'])) {
            if (!empty($map['filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['filters'] as $item1) {
                    $model->filters[$n1] = filters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
