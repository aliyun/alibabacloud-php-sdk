<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponseBody\customLines\customLine;

use AlibabaCloud\Tea\Model;

class ipv4s extends Model
{
    /**
     * @var string[]
     */
    public $ipv4;
    protected $_name = [
        'ipv4' => 'Ipv4',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4s
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4'])) {
            if (!empty($map['Ipv4'])) {
                $model->ipv4 = $map['Ipv4'];
            }
        }

        return $model;
    }
}
