<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListGreyTagRouteResponseBody\data\result\dubboRules\items;

class dubboRules extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $group;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'condition' => 'condition',
        'group' => 'group',
        'items' => 'items',
        'methodName' => 'methodName',
        'serviceName' => 'serviceName',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->methodName) {
            $res['methodName'] = $this->methodName;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['methodName'])) {
            $model->methodName = $map['methodName'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
