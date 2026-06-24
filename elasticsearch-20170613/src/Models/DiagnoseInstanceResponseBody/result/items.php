<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody\result;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $suggest;
    protected $_name = [
        'desc' => 'desc',
        'detail' => 'detail',
        'item' => 'item',
        'name' => 'name',
        'state' => 'state',
        'suggest' => 'suggest',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['detail'] = [];
                foreach ($this->detail as $key1 => $value1) {
                    $res['detail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->item) {
            $res['item'] = $this->item;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->suggest) {
            $res['suggest'] = $this->suggest;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                foreach ($map['detail'] as $key1 => $value1) {
                    $model->detail[$key1] = $value1;
                }
            }
        }

        if (isset($map['item'])) {
            $model->item = $map['item'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['suggest'])) {
            $model->suggest = $map['suggest'];
        }

        return $model;
    }
}
