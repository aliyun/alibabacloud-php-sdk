<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeAvailableVipsResponseBody\availableVips;
use AlibabaCloud\Tea\Model;

class DescribeAvailableVipsResponseBody extends Model
{
    /**
     * @var availableVips
     */
    public $availableVips;
    protected $_name = [
        'availableVips' => 'AvailableVips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableVips) {
            $res['AvailableVips'] = null !== $this->availableVips ? $this->availableVips->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableVipsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableVips'])) {
            $model->availableVips = availableVips::fromMap($map['AvailableVips']);
        }

        return $model;
    }
}
