<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdReginResponseBody;

use AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdReginResponseBody\data\saleNumbers;
use AlibabaCloud\SDK\Qssj\V20220112\Models\GetCrowdReginResponseBody\data\searchNumbers;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var saleNumbers[]
     */
    public $saleNumbers;

    /**
     * @var searchNumbers[]
     */
    public $searchNumbers;
    protected $_name = [
        'saleNumbers'   => 'SaleNumbers',
        'searchNumbers' => 'SearchNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saleNumbers) {
            $res['SaleNumbers'] = [];
            if (null !== $this->saleNumbers && \is_array($this->saleNumbers)) {
                $n = 0;
                foreach ($this->saleNumbers as $item) {
                    $res['SaleNumbers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchNumbers) {
            $res['SearchNumbers'] = [];
            if (null !== $this->searchNumbers && \is_array($this->searchNumbers)) {
                $n = 0;
                foreach ($this->searchNumbers as $item) {
                    $res['SearchNumbers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaleNumbers'])) {
            if (!empty($map['SaleNumbers'])) {
                $model->saleNumbers = [];
                $n                  = 0;
                foreach ($map['SaleNumbers'] as $item) {
                    $model->saleNumbers[$n++] = null !== $item ? saleNumbers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SearchNumbers'])) {
            if (!empty($map['SearchNumbers'])) {
                $model->searchNumbers = [];
                $n                    = 0;
                foreach ($map['SearchNumbers'] as $item) {
                    $model->searchNumbers[$n++] = null !== $item ? searchNumbers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
