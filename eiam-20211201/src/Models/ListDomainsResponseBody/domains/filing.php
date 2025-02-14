<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsResponseBody\domains;

use AlibabaCloud\Dara\Model;

class filing extends Model
{
    /**
     * @var string
     */
    public $icpNumber;
    protected $_name = [
        'icpNumber' => 'IcpNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icpNumber) {
            $res['IcpNumber'] = $this->icpNumber;
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
        if (isset($map['IcpNumber'])) {
            $model->icpNumber = $map['IcpNumber'];
        }

        return $model;
    }
}
