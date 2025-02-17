<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest;

use AlibabaCloud\Dara\Model;

class addEntry extends Model
{
    /**
     * @var string
     */
    public $cidr;
    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'cidr'        => 'Cidr',
        'description' => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
