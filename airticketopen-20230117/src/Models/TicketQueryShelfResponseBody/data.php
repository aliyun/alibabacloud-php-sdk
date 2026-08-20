<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody\data\shelves;

class data extends Model
{
    /**
     * @var shelves[]
     */
    public $shelves;
    protected $_name = [
        'shelves' => 'Shelves',
    ];

    public function validate()
    {
        if (\is_array($this->shelves)) {
            Model::validateArray($this->shelves);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shelves) {
            if (\is_array($this->shelves)) {
                $res['Shelves'] = [];
                $n1 = 0;
                foreach ($this->shelves as $item1) {
                    $res['Shelves'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Shelves'])) {
            if (!empty($map['Shelves'])) {
                $model->shelves = [];
                $n1 = 0;
                foreach ($map['Shelves'] as $item1) {
                    $model->shelves[$n1] = shelves::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
