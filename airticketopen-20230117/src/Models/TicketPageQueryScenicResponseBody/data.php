<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryScenicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryScenicResponseBody\data\scenics;

class data extends Model
{
    /**
     * @var scenics[]
     */
    public $scenics;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'scenics' => 'Scenics',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->scenics)) {
            Model::validateArray($this->scenics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scenics) {
            if (\is_array($this->scenics)) {
                $res['Scenics'] = [];
                $n1 = 0;
                foreach ($this->scenics as $item1) {
                    $res['Scenics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['Scenics'])) {
            if (!empty($map['Scenics'])) {
                $model->scenics = [];
                $n1 = 0;
                foreach ($map['Scenics'] as $item1) {
                    $model->scenics[$n1] = scenics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
