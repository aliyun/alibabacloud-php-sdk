<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect;

use AlibabaCloud\Dara\Model;

class backends extends Model
{
    /**
     * @var string
     */
    public $backend;
    protected $_name = [
        'backend' => 'Backend',
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

        return $model;
    }
}
