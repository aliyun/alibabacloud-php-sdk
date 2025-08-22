<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponseBody\pageBean\alertContacts;

class pageBean extends Model
{
    /**
     * @var alertContacts[]
     */
    public $alertContacts;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'alertContacts' => 'AlertContacts',
        'page' => 'Page',
        'size' => 'Size',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->alertContacts)) {
            Model::validateArray($this->alertContacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertContacts) {
            if (\is_array($this->alertContacts)) {
                $res['AlertContacts'] = [];
                $n1 = 0;
                foreach ($this->alertContacts as $item1) {
                    $res['AlertContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['AlertContacts'])) {
            if (!empty($map['AlertContacts'])) {
                $model->alertContacts = [];
                $n1 = 0;
                foreach ($map['AlertContacts'] as $item1) {
                    $model->alertContacts[$n1] = alertContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
