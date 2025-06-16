<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\SearchResponseBody\data\solutionList;

use AlibabaCloud\Dara\Model;

class solutionAttribute extends Model
{
    /**
     * @var string
     */
    public $supplySourceType;
    protected $_name = [
        'supplySourceType' => 'supply_source_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supplySourceType) {
            $res['supply_source_type'] = $this->supplySourceType;
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
        if (isset($map['supply_source_type'])) {
            $model->supplySourceType = $map['supply_source_type'];
        }

        return $model;
    }
}
