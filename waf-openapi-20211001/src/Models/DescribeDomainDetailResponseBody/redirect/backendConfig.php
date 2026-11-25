<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect;

use AlibabaCloud\Dara\Model;

class backendConfig extends Model
{
    /**
     * @var string
     */
    public $backend;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'backend' => 'Backend',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backend) {
            $res['Backend'] = $this->backend;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Backend'])) {
            $model->backend = $map['Backend'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
