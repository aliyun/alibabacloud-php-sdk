<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments;

class data extends Model
{
    /**
     * @var environments[]
     */
    public $environments;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'environments' => 'Environments',
        'total'        => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['Environments'] = [];
                $n1                  = 0;
                foreach ($this->environments as $item1) {
                    $res['Environments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Environments'])) {
            if (!empty($map['Environments'])) {
                $model->environments = [];
                $n1                  = 0;
                foreach ($map['Environments'] as $item1) {
                    $model->environments[$n1++] = environments::fromMap($item1);
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
