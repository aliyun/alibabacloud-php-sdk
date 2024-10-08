<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeIPRangeListResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $cidr;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $ipType;
    protected $_name = [
        'cidr'   => 'Cidr',
        'ipType' => 'IpType',
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
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        return $model;
    }
}
