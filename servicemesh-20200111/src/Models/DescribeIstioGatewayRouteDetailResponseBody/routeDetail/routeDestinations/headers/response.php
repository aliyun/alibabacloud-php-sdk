<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\headers;

use AlibabaCloud\Dara\Model;

class response extends Model
{
    /**
     * @var mixed[]
     */
    public $add;

    /**
     * @var string[]
     */
    public $remove;

    /**
     * @var mixed[]
     */
    public $set;
    protected $_name = [
        'add' => 'Add',
        'remove' => 'Remove',
        'set' => 'Set',
    ];

    public function validate()
    {
        if (\is_array($this->add)) {
            Model::validateArray($this->add);
        }
        if (\is_array($this->remove)) {
            Model::validateArray($this->remove);
        }
        if (\is_array($this->set)) {
            Model::validateArray($this->set);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->add) {
            if (\is_array($this->add)) {
                $res['Add'] = [];
                foreach ($this->add as $key1 => $value1) {
                    $res['Add'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->remove) {
            if (\is_array($this->remove)) {
                $res['Remove'] = [];
                $n1 = 0;
                foreach ($this->remove as $item1) {
                    $res['Remove'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->set) {
            if (\is_array($this->set)) {
                $res['Set'] = [];
                foreach ($this->set as $key1 => $value1) {
                    $res['Set'][$key1] = $value1;
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
        if (isset($map['Add'])) {
            if (!empty($map['Add'])) {
                $model->add = [];
                foreach ($map['Add'] as $key1 => $value1) {
                    $model->add[$key1] = $value1;
                }
            }
        }

        if (isset($map['Remove'])) {
            if (!empty($map['Remove'])) {
                $model->remove = [];
                $n1 = 0;
                foreach ($map['Remove'] as $item1) {
                    $model->remove[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Set'])) {
            if (!empty($map['Set'])) {
                $model->set = [];
                foreach ($map['Set'] as $key1 => $value1) {
                    $model->set[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
