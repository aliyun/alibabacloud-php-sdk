<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody\data\shelves;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody\data\shelves\tabs\cells;

class tabs extends Model
{
    /**
     * @var cells[]
     */
    public $cells;

    /**
     * @var int
     */
    public $tabIndex;

    /**
     * @var string
     */
    public $tabName;
    protected $_name = [
        'cells' => 'Cells',
        'tabIndex' => 'TabIndex',
        'tabName' => 'TabName',
    ];

    public function validate()
    {
        if (\is_array($this->cells)) {
            Model::validateArray($this->cells);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cells) {
            if (\is_array($this->cells)) {
                $res['Cells'] = [];
                $n1 = 0;
                foreach ($this->cells as $item1) {
                    $res['Cells'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tabIndex) {
            $res['TabIndex'] = $this->tabIndex;
        }

        if (null !== $this->tabName) {
            $res['TabName'] = $this->tabName;
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
        if (isset($map['Cells'])) {
            if (!empty($map['Cells'])) {
                $model->cells = [];
                $n1 = 0;
                foreach ($map['Cells'] as $item1) {
                    $model->cells[$n1] = cells::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TabIndex'])) {
            $model->tabIndex = $map['TabIndex'];
        }

        if (isset($map['TabName'])) {
            $model->tabName = $map['TabName'];
        }

        return $model;
    }
}
