<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Tea\Model;

class capacity extends Model
{
    /**
     * @var string[]
     */
    public $protocol;
    protected $_name = [
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocol'])) {
            if (!empty($map['Protocol'])) {
                $model->protocol = $map['Protocol'];
            }
        }

        return $model;
    }
}
