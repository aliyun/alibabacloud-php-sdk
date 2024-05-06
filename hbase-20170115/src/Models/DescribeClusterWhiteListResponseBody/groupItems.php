<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterWhiteListResponseBody;

use AlibabaCloud\Tea\Model;

class groupItems extends Model
{
    /**
     * @var string[]
     */
    public $whiteIp;
    protected $_name = [
        'whiteIp' => 'WhiteIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteIp) {
            $res['WhiteIp'] = $this->whiteIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteIp'])) {
            if (!empty($map['WhiteIp'])) {
                $model->whiteIp = $map['WhiteIp'];
            }
        }

        return $model;
    }
}
