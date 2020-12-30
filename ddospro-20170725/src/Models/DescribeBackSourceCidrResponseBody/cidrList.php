<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeBackSourceCidrResponseBody;

use AlibabaCloud\Tea\Model;

class cidrList extends Model
{
    /**
     * @var string[]
     */
    public $cidr;
    protected $_name = [
        'cidr' => 'Cidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cidrList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            if (!empty($map['Cidr'])) {
                $model->cidr = $map['Cidr'];
            }
        }

        return $model;
    }
}
