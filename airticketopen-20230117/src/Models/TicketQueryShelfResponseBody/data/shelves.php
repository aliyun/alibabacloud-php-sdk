<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody\data\shelves\tabs;

class shelves extends Model
{
    /**
     * @var int
     */
    public $shelfId;

    /**
     * @var int
     */
    public $shelfIndex;

    /**
     * @var string
     */
    public $shelfName;

    /**
     * @var tabs[]
     */
    public $tabs;
    protected $_name = [
        'shelfId' => 'ShelfId',
        'shelfIndex' => 'ShelfIndex',
        'shelfName' => 'ShelfName',
        'tabs' => 'Tabs',
    ];

    public function validate()
    {
        if (\is_array($this->tabs)) {
            Model::validateArray($this->tabs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shelfId) {
            $res['ShelfId'] = $this->shelfId;
        }

        if (null !== $this->shelfIndex) {
            $res['ShelfIndex'] = $this->shelfIndex;
        }

        if (null !== $this->shelfName) {
            $res['ShelfName'] = $this->shelfName;
        }

        if (null !== $this->tabs) {
            if (\is_array($this->tabs)) {
                $res['Tabs'] = [];
                $n1 = 0;
                foreach ($this->tabs as $item1) {
                    $res['Tabs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ShelfId'])) {
            $model->shelfId = $map['ShelfId'];
        }

        if (isset($map['ShelfIndex'])) {
            $model->shelfIndex = $map['ShelfIndex'];
        }

        if (isset($map['ShelfName'])) {
            $model->shelfName = $map['ShelfName'];
        }

        if (isset($map['Tabs'])) {
            if (!empty($map['Tabs'])) {
                $model->tabs = [];
                $n1 = 0;
                foreach ($map['Tabs'] as $item1) {
                    $model->tabs[$n1] = tabs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
